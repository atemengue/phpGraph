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
  }

?>