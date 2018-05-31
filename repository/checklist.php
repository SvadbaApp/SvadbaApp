<?php

require_once "./Db.php";
require_once "./model/Checklist.php";

class GetChecklist {

    public static function DrawList() {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT * FROM CHECKLIST");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        $entireChecklist = [];

        foreach ($result as $oneItem) {
            $newChecklist = new Checklist();
            $newChecklist->id = $oneItem['ID'];
            $newChecklist->title = $oneItem['TITLE'];
            $newChecklist->description = $oneItem['DESCRIPTION'];
            array_push($entireChecklist, $newChecklist);
        }

        foreach ($entireChecklist as $singleItem) {
            echo "<li><a href='userHomepage.php?id=$singleItem->id#Go'>$singleItem->title</a></li>";
        }
    }

    public static function DrawTitle($id) {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT TITLE FROM CHECKLIST WHERE ID = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo $result[0]['TITLE'];
    }

    public static function DrawDescription($id) {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT DESCRIPTION FROM CHECKLIST WHERE ID = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo $result[0]['DESCRIPTION'];
    }
}