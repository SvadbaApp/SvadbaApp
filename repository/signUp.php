<?php
if (isset($_POST['submit'])){

    require_once "../model/User.php";
    require_once "../Db.php";
    require_once "../repository/userRepo.php";

    if($_POST['password'] !== $_POST['repeatPassword'] || $_POST['email'] !== $_POST['repeatEmail']) {
        header("Location: ../index.php?task=registerUser#passwordsOrEmailDontMatch");
        die();
    }
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $weddingDate = $_POST['weddingDate'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?task=registerUser#emailNotValidated");
        die();
    }

    //provjeri da li korisnik postoji
    $conn = Db::getDbConnection();
    $query = $conn->prepare("SELECT * FROM USER WHERE EMAIL = :email");
    $query->bindParam(':email', $email);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    if (count($result)>0) {
        header("Location: ../index.php?task=registerUser#userAlreadyExists");
        die();
    }

    //dodaj korisnika u bazu
    $newUser = new User($firstName, $lastName, $gender, $email, password_hash($_POST['password'], PASSWORD_DEFAULT), $weddingDate);
    UserRepository::insertNewUser($newUser);

    //log in korisnika
    include_once "../repository/session.php";
}