<?php
session_start();
if (!isset($_SESSION['id'])){
    header("Location: index.php");
    die();
}
error_reporting(E_ALL & ~E_NOTICE);
require_once "./head.html";
require_once "./nav.php";
require_once "./repository/checklist.php";
?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 paper">
            <h3>LISTA ZA SVADBU</h3>
            <ul>
                <?php GetChecklist::DrawList(); ?>
            </ul>
        </div>
        <br><br>
        <div class="col-sm-4 paper">
        <a id="Go"></a>
            <h3 class="text-center"><?php GetChecklist::DrawTitle($_GET['id']); ?></h3>
            <div class="text-justify">
            <?php if(array_key_exists("id", $_GET)) {
                    GetChecklist::DrawDescription($_GET['id']);
                } else if($_GET == NULL) {
                    echo "<p>Organiziranje vjenčanja uistinu je zahtjevan posao koji traži puno planiranja i razmišljanja unaprijed.  Morate razmišljati o vjenčanici, cipelama, šminki, najmu prostora za vjenčanje, vjenčanom buketu, tečaju plesa, fotografu, dekoraciji, pozivnicama i zahvalnicama, rasporedu sjedenja gostiju i mnogim drugim sitnicama.<br><br>Kako biste bili sigurni da prilikom organizacije svojeg vjenčanja niste ništa propustili, prođite s nama popis, odnosno checklistu za vjenčanje</p>";
                } ?>
            </div>
            <!-- <div>Posuđen tekst od Apparo-Centar vjenčanog prstenja</div> -->
        </div>
        <div class="col-sm-5 paper">
            <h3>ZADACI</h3>
            <?php var_dump($_SESSION); ?>
        </div>
    </div>
</div>
<?php
require_once "footer.php";
?>