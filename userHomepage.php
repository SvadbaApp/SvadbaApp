<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include "./head.html";
include "./nav.php";
include "./repository/checklist.php";
include "./repository/providers.php";
include "./repository/offers.php";
include "./repository/userChoice.php";
if (!(isset($_SESSION['id']))){
    header("Location: index.php");
    die();
}
if(array_key_exists("id", $_GET) && $_GET["id"] > 12) {
    header("Location: index.php");
    die();
}
?>
<div class="container col-12 paper">
    <div class="row">
        <div class="col-sm-2">
            <h2 class="text-center">LISTA ZA SVADBU</h2><hr>
            <ul>
                <?php GetChecklist::DrawList(); ?>
            </ul>
        </div>
        <br><br>
        <div class="col-sm-4">
        <?php if(array_key_exists("id", $_GET)) { ?>
            <h2 class="text-center"><?php GetChecklist::DrawTitle($_GET['id']); ?></h2><hr>
            <div class="text-justify">
                <?php GetChecklist::DrawDescription($_GET['id']);
                } else if($_GET == NULL) { ?>
                    <h3 class="text-center">Svadba App</h3>
                    <div class="text-justify"> <?php
                    echo "<p>Organiziranje vjenčanja uistinu je zahtjevan posao koji traži puno planiranja i razmišljanja unaprijed.  Morate razmišljati o vjenčanici, cipelama, šminki, najmu prostora za vjenčanje, vjenčanom buketu, tečaju plesa, fotografu, dekoraciji, pozivnicama i zahvalnicama, rasporedu sjedenja gostiju i mnogim drugim sitnicama.<br><br>Kako biste bili sigurni da prilikom organizacije svojeg vjenčanja niste ništa propustili, prođite s nama popis, odnosno checklistu za vjenčanje</p>";
                } ?>
            </div>
            <!-- Posuđen tekst od Apparo-Centar vjenčanog prstenja -->
        </div>
        <div class="col-sm-6">
            <h2 class="text-center">VAŠI PODACI</h2><hr>
            <?php var_dump(showUserChoice::Draw($_GET['id'])); ?>
        </div>
    </div>
</div>
<?php if(array_key_exists("id", $_GET)) { ?>
<div class="container-fluid col-12 paper">
    <h2 class="text-center">PONUDE</h2><hr>
    <div class="row">
        <!--example site start-->
        <?php foreach(showOffers::checkOffers($_GET['id']) as $offer){
                showProviders::Draw($offer);
            }} ?>
        <!--example site end-->
    </div>
</div>

<br><br>
<?php
include "footer.php";
?>