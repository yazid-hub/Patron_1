<?php
	require_once ("Fabrique.class.php"); 
	require_once ("Singleton.class.php"); 
	class Modele  
	{
		
		public static function getLesProfesseurs ()
		{
			$maConnexion = Singleton::getConnexion();

			if ($maConnexion != null)
			{
				$requete = "select p.idPersonne, p.nom, p.prenom, pr.diplome from professeur pr, personne p where pr.idPersonne=p.idPersonne ; ";
				$select = $maConnexion->prepare ($requete);
				$select->execute ();
				$lesResultats =  $select->fetchALL();  
				$lesProfesseurs = array (); 

		        foreach($lesResultats as $unResultat){

		            $lesProfesseurs[] = FabriquePersonne :: getInstance($unResultat["nom"],$unResultat["prenom"],$unResultat["diplome"],"Professeur");
		        }
				return $lesProfesseurs; 
			}
			else
			{
				return null;
			}
		}	

		public static function getLesInitiaux ()
		{
			$maConnexion = Singleton::getConnexion();

			if ($maConnexion != null)
			{
				$requete = "select p.idPersonne, p.nom, p.prenom, i.montant from initial i, personne p where i.idPersonne=p.idPersonne ; ";
				$select = $maConnexion->prepare ($requete);
				$select->execute ();
				$lesResultats =  $select->fetchALL(); 
				 
				$lesInitiaux = array (); 

		        foreach($lesResultats as $unResultat){

		            $lesInitiaux[] = FabriquePersonne:: getInstance($unResultat["nom"],$unResultat["prenom"],$unResultat["montant"],"Initial");
		        }
				return $lesInitiaux; 
			}
			else
			{
				return null;
			}
		}	

		public static function getLesAlternants  ()
		{
			$maConnexion = Singleton::getConnexion();

			if ($maConnexion != null)
			{
				$requete = "select p.idPersonne, p.nom, p.prenom, a.entreprise from alternant a, personne p where a.idPersonne=p.idPersonne ; ";
				$select = $maConnexion->prepare ($requete);
				$select->execute ();
				$lesResultats =  $select->fetchALL();  
				$lesAlternants = array (); 

		        foreach($lesResultats as $unResultat){

		            $lesAlternants[] = FabriquePersonne :: getInstance($unResultat["nom"],$unResultat["prenom"],$unResultat["entreprise"],"Alternant");
		        }
				return $lesAlternants; 
			}
			else
			{
				return null;
			}
		}		
	}
?>