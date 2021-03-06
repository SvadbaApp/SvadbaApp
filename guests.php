<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!(isset($_SESSION['id']))){
    header("Location: index.php");
    die();
}
include "./head.html";
include "./nav.php";
include "./repository/WeddingExpense.php";
include "./repository/guests.php";
?>
<div class="container col-sm-10 paper">
    <hr>
    <h4><?php echo $_SESSION['firstName']." ".$_SESSION['lastName'];?>, dobro došli u Svadba App, planer za Vašu svadbu<?php
            $dateDiff = round((strtotime($_SESSION['weddingDate']) - time()) / (60 * 60 * 24));
            if ($dateDiff <= 0) {
                echo ". Čestitamo!!!</h4>";
            } else {
                echo " do koje ima još $dateDiff dana.</h4>";
            } ?><hr>
    <div class="row">
        <div class="col-sm-10 text-left">
            <h2>GOSTI</h2><hr>
            <div class="row">
                <div class="col-2">
                    <h5><b>Mladenka</b></h5>
                    <?php ShowGuests::Draw(1); ?>
                </div>
                <div class="col-2">
                    <h5><b>Mladoženja</b></h5>
                    <?php ShowGuests::Draw(2); ?>
                </div>
            </div>
        </div>
        <?php include_once "includes/userInfo.php"; ?>
    </div>
</div>