</main><!-- /.container -->

<div class="row">
  <div class="col-md-4">
    <?php 
      require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' .DIRECTORY_SEPARATOR . 'Compteur.php';
      $compteur = new Compteur(dirname(__DIR__). DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur');

      $compteur->incrementer();
      $vues = $compteur->recuperer();
    ?>

      il y'a <?= $vues ?>  visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site;

  </div>
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <h5>Navigation</h5>  
  <ul class="list-unstyled text-small">
    <?= nav_menu('nav-link'); ?>    
  </ul>
  </div>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
 