<?php 
 
 $age = null;



 if (!empty($_GET['age'])) {
  setcookie('age', $_GET['age'], time() + 60 * 60 * 24 );
  $_COOKIE['age']  = $_GET['age'];
 }


if(!empty($_COOKIE['age'])) {
  $annee = (int)$_COOKIE['age'];
  $age =  (int)date('Y') - $annee;
  
}
require 'elements/header.php'; 

?>

<?php if($age && $age >= 18): ?>

    <div class="row">
      <p>le contenu des grandes personnes</p>

    </div>
      <?php elseif ($age !== null): ?>

        <div class="alert alert-danger">
          Vous n'avez pas l'age requis pour voir le contenu
        </div>

  <?php else : ?>

    <form action="" method="GET">

    <label for="age">Votre age</label>
    <select class="form-control" name="age" id="">
      <?php for($i=1919;$i <= 2010 ; $i++ ): ?>
        <option value="<?= $i ?>"><?= $i ?></option>
      <?php endfor ;?>
    </select>

    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>

  <?php endif ?>

<?php  require 'elements/footer.php'; ?>