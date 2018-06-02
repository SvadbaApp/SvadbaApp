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
            echo    "<form action='' method='POST'>
                        <input type='hidden' name='formType' value='registerUser'>
                        <div class='form-group'>
                            <input type='text' class='form-control' name='title' placeholder='Naziv'>
                        </div>
                        <div class='form-group'>
                            <input type='tel' class='form-control' name='phone' placeholder='Kontakt broj'>
                        </div>
                        <div class='form-group'>
                            <input type='email' class='form-control' name='email' aria-describedby='emailHelp' placeholder='E-pošta'>
                        </div>
                        <div class='form-group'>
                            <input type='url' class='form-control' name='link' placeholder='Internet'>
                        </div>
                        <div class='form-group'>
                            <label for='info'>Vaš zapis:</label>
                            <textarea class='form-control' type='text' name='info' row='4'></textarea>
                        </div>
                        <button type='submit' name='submit' class='btn btn-light float-right'>Promjeni</button>
                    </form>";
        } else {
        foreach (self::Get($id) as $userChoice) {
            echo    "<form action='' method='POST'>
                        <input type='hidden' name='formType' value='registerUser'>
                        <div class='form-group'>
                            <input type='text' class='form-control' name='title' placeholder='$userChoice->title'>
                        </div>
                        <div class='form-group'>
                            <input type='tel' class='form-control' name='phone' placeholder='$userChoice->phone'>
                        </div>
                        <div class='form-group'>
                            <input type='email' class='form-control' name='email' aria-describedby='emailHelp' placeholder='$userChoice->email'>
                        </div>
                        <div class='form-group'>
                            <input type='url' class='form-control' name='link' placeholder='$userChoice->link'>
                        </div>
                        <div class='form-group'>
                            <label for='info'>Vaš zapis:</label>
                            <textarea class='form-control' type='text' name='info' row='4' placeholder='$userChoice->info'></textarea>
                        </div>
                        <button type='submit' name='submit' class='btn btn-light float-right'>Promjeni</button>
                    </form>";
                }
        }
    }
}