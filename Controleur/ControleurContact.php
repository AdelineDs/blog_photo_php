<?php

require_once 'Vue/Vue.php';

class ControleurContact {

  // Affiche la page de contact
  public function vue() {
    $vue = new Vue("Contact");
    $vue->generer(array (null));
  }

}