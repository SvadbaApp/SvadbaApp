<?php
session_start();
include_once "../Db.php";
$conn = Db::getDbConnection();
if (isset($_POST['update'])) {
    //update expense
    $queryUpdate = $conn->prepare("UPDATE EXPENSE SET TITLE = :title, PRICE = :price WHERE ID = :id AND USER_ID = :userId");
    $queryUpdate->bindParam(':id', $_POST['id']);
    $queryUpdate->bindParam(':userId', $_SESSION['id']);
    $queryUpdate->bindParam(':title', $_POST['title']);
    $queryUpdate->bindParam(':price', $_POST['price']);
    $queryUpdate->execute();
    }
if (isset($_POST['delete'])) {
    //delete expense
    $queryDelete = $conn->prepare("DELETE FROM EXPENSE WHERE ID = :id AND USER_ID = :userId AND TITLE = :title AND PRICE = :price");
    $queryDelete->bindParam(':id', $_POST['id']);
    $queryDelete->bindParam(':userId', $_SESSION['id']);
    $queryDelete->bindParam(':title', $_POST['title']);
    $queryDelete->bindParam(':price', $_POST['price']);
    $queryDelete->execute();
    }
if (isset($_POST['insert'])) {
    //insert expense
    $queryInsert = $conn->prepare("INSERT INTO EXPENSE (USER_ID, TITLE, PRICE) VALUES (:userId, :title, :price)");
    $queryInsert->bindParam(':userId', $_SESSION['id']);
    $queryInsert->bindParam(':title', $_POST['title']);
    $queryInsert->bindParam(':price', $_POST['price']);
    $queryInsert->execute();
    }
header("Location: ../wedding-expense.php");
?>