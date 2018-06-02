<?php
session_start();
require_once "head.html";
?>
<div class="paper">
<h1 class="text-center italianno"><img class="logo" src="img/logo.png" alt="Svadba-App-Logo"><br>Svadba App<br></h1>
<!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->

<p class="text-center italianno headline">Isplanirajte Vaš najvažniji dan uz našu pomoć</p>
</div>
<?php
    if (array_key_exists("task", $_GET) && $_GET["task"]== "registerUser") {
        include "signUpForm.php";
    } else if ($_SESSION) {
        header("Location: userHomepage.php");
    } else {
        include "signInForm.html";
    }
?>
<?php
require_once "footer.php";
?>