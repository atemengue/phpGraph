<?php 
  $title = 'Nous contacter';
  $nav = 'contact';
  require_once 'config.php';
  require_once 'functions.php';
  $creneaux = creneaux_html(CRENEAUX);
  require 'header.php'; 

?>

  <div class="row">
    <div class="col-md-8">
      <h2>Nous contacter</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quam quos itaque eligendi ratione dolorem possimus ex, 
        nisi officiis! Nihil atque nostrum autem officiis eum quos ipsum quisquam quaerat. 
        Animi, alias.
      </p>
    </div>
    <div class="col-md-4">
      <h2>Horaire d'ouvertures</h2>
      <?= $creneaux ?>
    </div>
  </div>


<?php require 'footer.php'; ?>
