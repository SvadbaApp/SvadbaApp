<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once "../model/User.php";
class UserRepository {

    // Funkcija dohvaća korisnika
    public static function getUser($email, $password) {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT *, gender.TITLE as GENDER_TITLE FROM user INNER JOIN gender ON gender.ID = GENDER WHERE EMAIL = :em");
        $query->bindParam(':em', $email);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        if (!(password_verify($password, $result[0]['PASSWORD']))) {
            header("Location: ../index.php?signup=wrongPassword");
            die();
        }
        return $result;
    }

    // Funkcija umece novog korisnika u bazu
    public function insertNewUser($userToInsert) {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("INSERT INTO user (FIRST_NAME, LAST_NAME, GENDER, EMAIL, PASSWORD, WEDDING_DATE) VALUES (:fn, :ln, :gender, :em, :pass, :weddingDate)");
        $query->bindParam(':fn', $userToInsert->getFirstName());
        $query->bindParam(':ln', $userToInsert->getLastName());
        $query->bindParam(':gender', $userToInsert->getGender());
        $query->bindParam(':em', $userToInsert->getEmail());
        $query->bindParam(':pass', $userToInsert->getPassword());
        $query->bindParam(':weddingDate', $userToInsert->getWeddingDate());
        $query->execute();
    }
}
?>