<?php
if (isset($_POST['submit'])) {
    session_start();
    include_once "../Db.php";
    $id = $_POST['checklistId'];
    $conn = Db::getDbConnection();
    //provjeri da li postoji user choice
    $querySelect = $conn->prepare("SELECT * FROM USER_CHOICE WHERE USER_ID = :userId AND CHECKLIST_ID = :checklistId");
    $querySelect->bindParam(':userId', $_SESSION['id']);
    $querySelect->bindParam(':checklistId', $_POST['checklistId']);
    $querySelect->execute();
    $resultSelect = $querySelect->fetchAll(PDO::FETCH_ASSOC);
    if($resultSelect[0]['USER_ID'] !== $_SESSION['id'] && $resultSelect[0]['CHECKLIST_ID'] !== $_POST['checklistId']) {
        //umetni novi user choice
        $queryInsert = $conn->prepare("INSERT INTO USER_CHOICE (USER_ID, CHECKLIST_ID, INFO) VALUES (:userId, :checklistId, :info)");
        $queryInsert->bindParam(':userId', $_SESSION['id']);
        $queryInsert->bindParam(':checklistId', $_POST['checklistId']);
        $queryInsert->bindParam(':info', $_POST['info']);
        $queryInsert->execute();
    } else {
        //update user choice
        $queryUpdate = $conn->prepare("UPDATE USER_CHOICE SET INFO = :info WHERE USER_ID = :userId AND CHECKLIST_ID = :checklistId");
        $queryUpdate->bindParam(':userId', $_SESSION['id']);
        $queryUpdate->bindParam(':checklistId', $_POST['checklistId']);
        $queryUpdate->bindParam(':info', $_POST['info']);
        $queryUpdate->execute();
    }
}
header("Location: ../userHomepage.php?id=$id");
?>