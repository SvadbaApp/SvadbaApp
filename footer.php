<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
  crossorigin="anonymous"></script>
<br>
<footer>
  <small class="form-text fixed-bottom text-center bg-light">
      &copy;
      <?php
      $fromYear = 2018;
      $thisYear = (int)date('Y');
      echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> @ <a href="http://svadbaapp.isolaja.com/">svadbaapp.com</a> by <a href="http://isolaja.com" target="_blank">isolaja.com</a>
  </small>

</footer>
</body>

</html>