<?php

include_once "model/Offers.php";
include_once "Db.php";

class showOffers {

    public static function insertToModel() {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT * FROM offers");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $allOffers = [];
        foreach ($result as $offer) {
            $newOffer = new Offers();
            $newOffer->id = $offer['ID'];
            $newOffer->checklistId = $offer['CHECKLIST_ID'];
            $newOffer->providersId = $offer['PROVIDERS_ID'];
            array_push($allOffers, $newOffer);
        }
        return $allOffers;
    }

    public static function checkOffers($id) {
        $allProviders = [];
        foreach(self::insertToModel() as $offer) {
            if($offer->checklistId == $id){
                array_push($allProviders, $offer->providersId);
            }
        }
        return $allProviders;
    }
}
?>