<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 paper">
        <?php include "includes/errors.php"; ?>
            <span>
                <h2>Prijava</h2>
            </span>
            <form action="repository/signIn.php" method="POST">
                <input type="hidden" name="formType" value="signIn">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="E-pošta">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Lozinka">
                </div>
                <button type="submit" name="submit" class="btn btn-light">Prijavi se</button>
            </form>
            <div class="float-right">
                <a type="button" class="btn btn-light" href="index.php?task=signUpUser">Nemaš račun? Registriraj se</a>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>