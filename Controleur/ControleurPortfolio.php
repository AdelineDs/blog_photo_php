<?php

require_once 'Modele/Portfolio.php';
require_once 'Vue/Vue.php';

class ControleurPortfolio{
    
    private $portfolio;
    
    public function __construct() {
    $this->portfolio = new Portfolio();
  }
  
     // Affiche la liste de tous les billets du blog
  public function portfolio() {
    session_start();
    $photos = $this->portfolio->getPortfolio();
    $vue = new Vue("Portfolio");
    $vue->generer(array('photos' => $photos));
  } 
  
  
}
