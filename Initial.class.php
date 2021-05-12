
<?php
	require_once ("Personne.class.php");
	class Initial extends Personne
	{
		private $montant;

		public function __construct($nom , $prenom, $montant)
		{
			parent :: __construct ($nom , $prenom) ;
			$this->montant=$montant;
		}
		public function getMontant() {
			return $this->montant;
		}
		public function setMontant($montant) {
			$this->montant = $montant;
		}

		public function afficher()
		{
		$chaine = "";
        $chaine .= "<tr><td>".$this->nom."</td><td>".$this->prenom."</td><td>".$this->montant."</td></tr>";	
        return $chaine;
    	}
    }
  ?>

