<?php

include_once "./model/Gender.php";
include_once "./Db.php";

class ShowGender {

    public static function insertToModel() {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT * FROM GENDER");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $allGenders = [];
        foreach ($result as $gender) {
            $newGender = new Gender();
            $newGender->id = $gender['ID'];
            $newGender->title = $gender['TITLE'];
            array_push($allGenders, $newGender);
        }
        return $allGenders;
    }

    public static function Draw() {
        foreach(self::insertToModel() as $gender) {
            echo    "<div class='form-check'>
                    <input id='gender' class='form-check-input' name='gender' value='$gender->id' type='radio'";
            if($gender->id == 1){
            echo    "checked>";
            } else {
            echo    ">";
            }
            echo    "<label class='form-check-label' for='$gender->title'>$gender->title</label>
                    </div>";
        }
    }
}