<?php


function nav_item (string $lien, string $name, string $linkClasse = ''):string {

  $classe = 'nav-item';
  
  if ($_SERVER['SCRIPT_NAME'] === $lien) {
    $classe .=' active';
    }
    return  '<li class="' . $classe . '">
  <a class="' . $linkClasse . ' " href=" '. $lien . '">' . $name . ' </a>
  </li>';
  }


  function nav_menu(string $linkClasse = ''): string  {

    return 
    nav_item('/index.php', 'Acceuil', $linkClasse) .
    nav_item('/contact.php', 'Contact', $linkClasse) ;
    nav_item('/jeu.php', 'Jeu', $linkClasse) ;
  }

  function checkbox(string $name, string $value, array $data): string {
    $attributes = '';
    if(isset($data[$name]) && in_array($value, $data[$name])) {
      $attributes .= 'checked';
    } 

    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
}


function radio(string $name, string $value, array $data): string {
  $attributes = '';

  if(isset($data[$name]) && $value === $data[$name]) {
    $attributes .= 'checked';
  } 

  return <<<HTML
  <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
}


function dump ($variable) {
  echo '<pre>';
   var_dump($variable);
  echo '</pre>';
}

function creneaux_html(array $creneaux) {
  $pharses = [];
  foreach($creneaux as $creneau) {
    $pharses[] = "de <strong>{$creneau[0]}h a {$creneau[1]}h </strong>";
  }
  return implode(' et ', $pharses);

}