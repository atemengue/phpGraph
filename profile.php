<?php 

$nom = null;

if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter'){
  unset($_COOKIE['utilisateur']);
  setcookie('utilisateur', '' ,time() - 10); //time dans le passe
}

  if(!empty($_COOKIE['utilisateur'])) {
    $nom = $_COOKIE['utilisateur'];
  }

if (!empty($_POST['nom'])) {
  setcookie('utilisateur', $_POST['nom']);
  $nom = $_POST['nom'];
}
require 'elements/header.php'; 

?>

<?php if ($nom): ?>
  <h1>Bonjour <?= htmlentities($nom) ?></h1>
  <a href="profile.php?action=deconnecter">Se deconnecter</a>
<?php else: ?>

<form action="" method="POST">
  <div class="form-group">
    <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php endif; ?>

<?php  require 'elements/footer.php'; ?>