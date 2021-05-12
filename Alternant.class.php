<?php
    require_once("Personne.class.php");

    class Alternant extends Personne
    {
        private $entreprise;

        public function __construct($nom, $prenom, $entreprise)
        {
            parent::__construct($nom,$prenom);
            $this->entreprise = $entreprise;
        }

        public function getEntreprise()
        {
            return $this->entreprise;
        }

        public function setEntreprise($entreprise)
        {
            $this->entreprise = $entreprise;
        }

        public function afficher()
        {
            $chaine = "";

            $chaine.= "<tr><td>".$this->nom."</td><td>". $this->prenom."</td><td>".$this->entreprise."</td></tr>";
            return $chaine;
        }
    }
?>