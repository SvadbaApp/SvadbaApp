<?php
    if((array_key_exists("error", $_GET) && $_GET["error"] == "empty")) {
        echo "<p class='text-center text-danger'>Niste unijeli Vaše podatke, pokušajte ponovno</p>";
    }
    if((array_key_exists("error", $_GET) && $_GET["error"] == "repeat")) {
        echo "<p class='text-center text-danger'>E-pošta ili lozinka nisu isti, pokušajte ponovno</p>";
    }
    if((array_key_exists("error", $_GET) && $_GET["error"] == "emailValidate")) {
        echo "<p class='text-center text-danger'>E-pošta krivo upisana, pokušajte ponovno</p>";
    }
    if((array_key_exists("error", $_GET) && $_GET["error"] == "emailExists")) {
        echo "<p class='text-center text-danger'>E-pošta već postoji</p>";
    }
?>