<?php 
require_once __DIR__ . DIRECTORY_SEPARATOR .  'Compteur.php';

  class DoubleCompteur extends Compteur {

    const INCREMENT = 1;
    public function recuperer(): int {
      return 2 * parent::recuperer();
    }

    public function demo() {
      return "ici c'est la demo";
    }
  }