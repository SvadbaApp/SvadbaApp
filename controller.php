<?php
    if (array_key_exists("task", $_GET) && $_GET["task"] == "signUpUser") {
        include_once "welcome.php";
        include_once "signUpForm.php";
        echo "<br>";
    } else if (array_key_exists("task", $_GET) && $_GET["task"] == "signInUser"){
        include_once "welcome.php";
        include_once "signInForm.html";
        echo "<br>";
    } else if (array_key_exists("task", $_GET) && $_GET["task"] == "wedding-expense") {
        include_once "wedding-expense.php";
    } else if (empty($_SESSION['id'])) {
        include_once "welcome.php";
        include_once "signInForm.html";
        echo "<br>";
    } else {
        include_once "userHomepage.php";
    }
?>