<?php
include_once "repository/gender.php";
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 paper">
            <?php include "includes/errors.php"; ?>
            <span>
                <h2>Registracija</h2>
            </span>
            <form action="./repository/signUp.php" method="POST">
                <input type="hidden" name="formType" value="registerUser">
                <div class="form-group">
                    <input type="text" class="form-control" name="firstName" placeholder="Ime" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lastName" placeholder="Prezime" required>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <div class="col-sm-10">
                            <?php ShowGender::Draw(); ?>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for='weddingDate'>Datum svadbe:</label>
                    <input type="date" class="form-control" name="weddingDate" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="repeatEmail" aria-describedby="emailHelp" placeholder="Ponovi e-mail" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Lozinka" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="repeatPassword" placeholder="Ponovi lozinku" required>
                </div>
                <button type="submit" name="submit" class="btn btn-light">Registriraj se</button>
            </form>
            <div class="float-right">
                <a type="button" class="btn btn-light" href="index.php?task=signInUser"> Postojeći korisnik? Prijavi se</a>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>