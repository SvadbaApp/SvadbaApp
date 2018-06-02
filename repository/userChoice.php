<?php

include_once "./model/UserChoice.php";
include_once "./Db.php";

class showUserChoice {

    public static function insertToModel() {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT * FROM USER_CHOICE WHERE USER_ID = :userId");
        $query->bindParam(':userId', $_SESSION['id']);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $allUserChoice = [];
        foreach ($result as $userChoice) {
            $newUserChoice = new UserChoice();
            $newUserChoice->id = $userChoice['ID'];
            $newUserChoice->userId = $userChoice['USER_ID'];
            $newUserChoice->checklistId = $userChoice['CHECKLIST_ID'];
            $newUserChoice->title = $userChoice['TITLE'];
            $newUserChoice->phone = $userChoice['PHONE'];
            $newUserChoice->email = $userChoice['EMAIL'];
            $newUserChoice->link = $userChoice['LINK'];
            $newUserChoice->info = $userChoice['INFO'];
            array_push($allUserChoice, $newUserChoice);
        }
        return $allUserChoice;
    }

    public static function Draw($id) {
        $allUserChoice = [];
        foreach(self::insertToModel() as $choice) {
            if($choice->checklistId == $id){
                array_push($allUserChoice, $choice);
            }
        }
        return $allUserChoice;
    }
}