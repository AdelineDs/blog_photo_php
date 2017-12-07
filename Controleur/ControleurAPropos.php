<?php

require_once 'Vue/Vue.php';

class ControleurAPropos {

  // Affiche la page a propos
  public function vue() {
    $vue = new Vue("APropos");
    $vue->generer(array (null));
  }

}