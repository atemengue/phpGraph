<?php
  $title = 'Nous contacter';
  $nav = 'contact';
  require_once 'config.php';
  require_once 'functions.php';

  date_default_timezone_set('Europe/Paris');

  $heure = (int)($_GET['heure'] ?? date('G'));

  $jour = (int)($_GET['jour'] ?? date('N') - 1);

  $creneaux = CRENEAUX[date('N') - 1];

  $ouvert =  in_creneaux($heure, $creneaux);

  $color = $ouvert ? 'green' : 'red';

  require 'elements/header.php'; 

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

  

      <?php if ($ouvert) : ?>
      <div class="alert alert-success">
        le magasin est ouvert
      </div>

      <?php else : ?>
      <div class="alert alert-danger">
        le magasin sera fermé
      </div>

      <?php endif ?>

      <form action="" method="GET">
        <div class="from-group">
          <?= select('jour', $jour, JOURS); ?>
          
        </div>
        <div class="form-group">
          <input type="number" name="heure" value="<?= $heure ?>">
        </div>
        <button class="btn btn-primary" type="submit">Voir si le magasin est ouvert</button>
      </form>


        <ul>
          <?php foreach (JOURS as $key => $jour): ?>
            <li <?php if ($key + 1 === (int)date('N')) : ?> style="color: <?= $color; ?>" <?php endif ?>  >
              <strong><?= $jour?></strong>:
              <?= creneaux_html(CRENEAUX[$key]); ?>
            </li>
          <?php endforeach; ?>
        </ul>
    </div>
  </div>


<?php require 'elements/footer.php'; ?>
