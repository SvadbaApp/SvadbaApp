<?php

if (isset($_POST['submit'])){

    require_once "../Db.php";
    require_once "../repository/userRepo.php";

    $email = $_POST['email'];
    if (empty($email) || empty($_POST['password'])){
        header("Location: ../index.php?signup=empty");
        die();
    }

    //log in korisnika
    $user = UserRepository::getUser($email, $_POST['password']);

    include_once "../repository/session.php";
}
