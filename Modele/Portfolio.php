<?php

require_once 'Modele/Modele.php';

class Portfolio extends Modele {
    
    //Méthode qui recupere les photos
        public function getPortfolio()
    {
            $sql = 'SELECT id, titre, categorie, lien FROM portfolio ORDER BY id LIMIT 12 OFFSET 0';
        $listephotos = $this->executerRequete($sql);
        return $listephotos;
    }
    
}
