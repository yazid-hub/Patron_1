<?php
	require_once ("Modele.class.php"); 

	class Iris 
	{
		private $lesInitiaux, $lesProfesseurs, $lesAlternants ; 

		public function __construt ()
		{
			$this->lesInitiaux = array(); 
			$this->lesProfesseurs = array(); 
			$this->lesAlternants = array(); 	
		}

		public function charger ()
		{
			$this->lesInitiaux = Modele::getLesInitiaux(); 
			$this->lesProfesseurs = Modele::getLesProfesseurs(); 
			$this->lesAlternants = Modele::getLesAlternants(); 
		}
		public function afficherLesInitiaux ()
		{
			$chaine ="<table border = '1'><th>Nom</th><th>Prénom</th><th>Montant</th>"; 
			foreach ($this->lesInitiaux as $unInitial) {
				$chaine .= $unInitial->afficher (); 
			}
			$chaine .="</table> ";
			return $chaine ;  
		}
		public function afficherLesAlternants ()
		{
			$chaine ="<table border = '1'><th>Nom</th><th>Prénom</th><th>Entreprise</th>"; 
			foreach ($this->lesAlternants as $unAlternant) {
				$chaine .= $unAlternant->afficher (); 
			}
			$chaine .="</table> ";
			return $chaine ;  
		}
		public function afficherLesProfesseurs ()
		{
			$chaine ="<table border = '1'><th>Nom</th><th>Prénom</th><th>Diplome</th>"; 
			foreach ($this->lesProfesseurs as $unProfesseur) {
				$chaine .= $unProfesseur->afficher (); 
			}
			$chaine .="</table> ";
			return $chaine ;  
		}
	}
	
?>