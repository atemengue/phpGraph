
<?php
require_once 'functions.php';

  $parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
  ];

  $cornets = [
    'Pot' => 2,
    'Cornet' => 3
  ];

  $supplements = [
    'Pepites de chocolat' => 1,
    'Chantilly' => 0.5
  ];

  $title = 'Composer votre glace';
  $ingredients = [];
  $total = 0;


// UTILISER UN FOREACH 

  if (isset($_GET['parfum'])) {
    foreach($_GET['parfum'] as $parfum) {
      if(isset($parfums[$parfum])) {
      $ingredients[] = $parfum;
      $total += $parfums[$parfum];
    }
   }
  }

   if (isset($_GET['supplement'])) {
    foreach($_GET['supplement'] as $supplement) {
      if(isset($supplements[$supplement])) {
      $ingredients[] = $supplement;
      $total += $supplements[$supplement];
    }
   }
  }

  if (isset($_GET['supplement'])) {
    $cornet = $_GET['cornet'];

      if(isset($cornets[$cornet])) {
      $ingredients[] = $cornet;
      $total += $cornets[$cornet];
    }
   }

  require 'elements/header.php';
?>

<h2>Composer votre glace</h2>

<div class="row">
  <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Votre glace</h5>
          <ul>
              <?php foreach($ingredients as $ingredient): ?>
                <li><?= $ingredient ?></li>
              <?php endforeach; ?>
          </ul>
          <p>
            <strong>Prix: </strong> <?= $total ?> FCFA
          </p>
        </div>

      </div>
  </div>
  <div class="col-md-8">
  <form action="/jeu.php" method="GET">
  <h2>Choississez vos parfums</h2>
  <div class="form-group">
    <?php foreach($parfums as $parfum => $prix): ?>
      <div class="checkbox">
        <label for="">
          <?= checkbox('parfum',$parfum, $_GET) ?>
          <?= $parfum ?>  - <?= $prix ?> FCFA
        </label>
      </div>
      <?php endforeach; ?>
      
      <h2>Choississez votre cornet </h2>

      <?php foreach($cornets as $cornet => $prix): ?>
        <div class="radio">
          <label for="">
          <?= radio('cornet',$cornet, $_GET) ?>
          <?= $cornet ?>  - <?= $prix ?> FCFA
          </label>
        </div>
      <?php endforeach; ?>

  <h2>Choississez vos supplements</h2>

      <?php foreach($supplements as $supplement => $prix): ?>
        <div class="checkbox">
          <label for="">
          <?= checkbox('supplement',$supplement, $_GET) ?>
          <?= $supplement ?>  - <?= $prix ?> FCFA
          </label>
        </div>
      <?php endforeach; ?>

      <button class="btn btn-primary" type="submit">Composer ma glase</button>
  </form>

  </div>
</div>



<h2>$_GET</h2>
<pre>
  <?php var_dump($_GET) ?>
</pre>

<h2>$_POST</h2>
<pre>
  <?php var_dump($_POST) ?>
</pre>


<?php  require 'elements/footer.php' ?>