<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
  <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png" alt="Svadba-App-Logo"></a>
  <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if(empty($_SESSION['id'])) { } else {?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">SVADBA APP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?task=wedding-expense">TROŠKOVNIK</a>
      </li>
    </ul> <?php } ?>
    <ul class="navbar-nav fixed-left ml-auto">
        <li>
          <div class="nav-login">
          <?php
          if (isset($_SESSION['id'])){?>
          <form action="repository/signOut.php" method="POST">
            <button type="submit" name="submit" class="btn btn-dark-purple my-2 my-sm-0">Odjava</button>
          </form><?php
          } else { ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="btn btn-dark-purple my-2 my-sm-0 header-link-white" href="index.php?task=signUpUser">Registriraj se</a>
        </li>
        <?php
        }
        ?>
      </ul>




    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <form class="form-inline my-2 my-lg-0" action="repository/signOut.php" method="POST">
          <a class="nav-link" type="submit" name="submit">Odjava</a>
        </form>
      </li>
    </ul> -->




  </div>
  <a class="navbar-brand img-hor-vert" href="index.php"><img class="logo" src="img/logo.png" alt="Svadba-App-Logo"></a>
</nav>
