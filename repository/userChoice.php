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
            $newUserChoice->info = $userChoice['INFO'];
            array_push($allUserChoice, $newUserChoice);
        }
        return $allUserChoice;
    }

    public static function Get($id) {
        $allUserChoice = [];
        foreach(self::insertToModel() as $choice) {
            if($choice->checklistId == $id){
                array_push($allUserChoice, $choice);
            }
        }
        return $allUserChoice;
    }

    public static function Draw($id) {
        if (self::Get($id) == NULL) {
            echo    "<form action='./submits/changeUserChoice.php' method='POST'>
                        <input type='hidden' name='checklistId' value='$id'>
                        <div class='form-group'>
                            <textarea class='form-control' type='text' name='info' rows='10' placeholder='prazno'></textarea>
                        </div>
                        <button type='submit' name='submit' class='btn btn-light float-right'>Zapiši</button>
                    </form>";
        } else {
        foreach (self::Get($id) as $userChoice) {
            echo    "<form action='./submits/changeUserChoice.php' method='POST'>
                        <input type='hidden' name='checklistId' value='$id'>
                        <div class='form-group'>
                            <textarea class='form-control' type='text' name='info' rows='10' placeholder='$userChoice->info'>$userChoice->info</textarea>
                        </div>
                        <button type='submit' name='submit' class='btn btn-light float-right'>Zapiši</button>
                    </form>";
                }
        }
    }
}