<div class="col-sm-2 text-center">
    <h2>INFO</h2><hr>
    <h4><?php echo $_SESSION['gender']."<br>".$_SESSION['firstName']." ".$_SESSION['lastName']; ?></h4>
    <p>E-pošta: <?php echo $_SESSION['email']; ?></p>
    <p>Datum svadbe: <?php echo(date("d.m.Y", strtotime($_SESSION['weddingDate']))); ?></p>
    <h4><b>Trenutni trošak:<br><?php echo WeddingExpense::TotalCost(); ?></b></h4>
</div>