
<?php
	require_once ("Personne.class.php"); 
	class Professeur extends Personne 
	{
		private $diplome ; 

		public function __construct($nom, $prenom, $diplome)
		{
			parent :: __construct ($nom, $prenom) ;
			$this->diplome = $diplome;
		}

		public function afficher ()
		{
			$chaine = "";
			$chaine .= "<tr><td>".$this->nom."</td><td>".$this->prenom."</td><td>".$this->diplome."</td></tr>";
			return $chaine;
		}
		public function setDiplome ($diplome)
		{
			$this->diplome= $diplome;
		}

		public function getDiplome()
		{
			return $this->diplome;
		}
	}
?>

