<?php 
  class Compteur {
    
    const INCREMENT = 1;
    private $fichier = null;

    public function __construct($fichier) {
      $this->fichier = $fichier;
    }

   public function incrementer () {
      $fichier_journalier = $this->fichier . '-' .date('Y-m-d');
      $this->incrementer_compteur($this->fichier);
      $this->incrementer_compteur($fichier_journalier);
  
    }
  
  private function incrementer_compteur (string $fichier): void {
    $compteur = 1;
    if (file_exists($fichier)) {
      $compteur = file_get_contents($fichier);
      $compteur += self::INCREMENT;
      file_put_contents($fichier, $compteur);
    } 
      file_put_contents($fichier, $compteur);      
  }


  public function recuperer():string {
    if(!file_exists($this->fichier)) {
      return 0;
    }
    return file_get_contents($this->fichier);
  }

}