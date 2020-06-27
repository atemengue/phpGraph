<?php

  $aDeviner = 150;
  $erreur = null;
  $success = null;
  $value = null;
  
  if(isset($_GET['chiffre'])) { 
    if ($_GET['chiffre'] > $aDeviner) { 
      $erreur='Votre chiffre est trop grand';
    } elseif ($_GET['chiffre'] < $aDeviner) {
      $erreur='Votre chiffre est trop petit';
    } else {
      $success= "Bravo ! Vous avez devine le chiffre <strong>$aDeviner</strong>";
  }
  $value = (int)$_GET['chiffre'];
}

    require 'header.php';
?>

<?php if ($erreur): ?>
    <div class="alert alert-danger">
      <?= $erreur ?>
    </div>
<?php elseif ($success): ?>
    <div class="alert alert-success">
      <?= $success ?>
    </div>
<?php endif ?>




  <form action="/jeu.php" method="GET">
  <div class="form-group">
    <input class="form-control" value="<=? $value ?>" type="number" name="chiffre"  placeholder="entre 0 et 100">
  </div>
    <button class="btn btn-primary" type="submit">Deviner</button>
  </form>



<?php  require 'footer.php' ?>