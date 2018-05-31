<?php
session_start();
$user = UserRepository::getUser($email, $_POST['password']);
$_SESSION['id'] = $user[0]['ID'];
$_SESSION['firstName'] = $user[0]['FIRST_NAME'];
$_SESSION['lastName'] = $user[0]['LAST_NAME'];
$_SESSION['email'] = $user[0]['EMAIL'];
$_SESSION['gender'] = $user[0]['GENDER_TITLE'];
header("Location: ../userHomepage.php");