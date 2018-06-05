<?php

include_once "model/Providers.php";
include_once "Db.php";

class showProviders {

    public static function insertToModel() {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT * FROM providers");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $allProviders = [];
        foreach ($result as $provider) {
            $newProvider = new Providers();
            $newProvider->id = $provider['ID'];
            $newProvider->title = $provider['TITLE'];
            $newProvider->description = $provider['DESCRIPTION'];
            $newProvider->link = $provider['LINK'];
            $newProvider->logo = $provider['LOGO'];
            array_push($allProviders, $newProvider);
        }
        return $allProviders;
    }

    public static function Draw($id) {
        foreach(self::insertToModel() as $provider) {
            if ($provider->id == $id) {
            echo "
                <div class='col-lg-4 text-center'>
                    <div class='card mx-auto' style='width: 18rem;'>
                        <h4><a target='_blank' href='$provider->link'>$provider->title</a></h4>
                        <a target='_blank' href='$provider->link'><img class='card-img-top provider-logo' src='$provider->logo' alt='provider-logo'></a>
                        <div class='card-body'>
                            <p class='card-text'>$provider->description<br></p>
                        </div>
                    </div>
                </div>
                ";
            }
        }
    }
}
?>