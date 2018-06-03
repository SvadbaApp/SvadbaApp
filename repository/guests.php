<?php
include_once "./model/Guests.php";
include_once "./Db.php";
class ShowGuests {

    public static function insertToModel() {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT * FROM GUESTS ORDER BY GUEST_LASTNAME, GUEST_FIRSTNAME");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $allGuests = [];
        foreach ($result as $guest) {
            $newGuest = new Guests();
            $newGuest->id = $guest['ID'];
            $newGuest->userId = $guest['USER_ID'];
            $newGuest->guestFirstname = $guest['GUEST_FIRSTNAME'];
            $newGuest->guestLastname = $guest['GUEST_LASTNAME'];
            $newGuest->familySideId = $guest['FAMILY_SIDE_ID'];
            array_push($allGuests, $newGuest);
        }
        return $allGuests;
    }

    public static function Draw($familySideId) {
        foreach(self::insertToModel() as $guest) {
            if ($guest->familySideId == $familySideId)
            echo "$guest->guestFirstname $guest->guestLastname<br>";
        }
    }
}