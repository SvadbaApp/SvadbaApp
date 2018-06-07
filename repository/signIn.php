<?php

if (isset($_POST['submit'])){

    include "../Db.php";
    include "../repository/userRepo.php";

    $email = $_POST['email'];
    if (empty($email) || empty($_POST['password'])){
        header("Location: ../index.php?error=empty");
        die();
    }

    //log in korisnika
    $user = UserRepository::getUser($email, $_POST['password']);

    include "../repository/session.php";
}
?>