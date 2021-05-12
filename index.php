<?php
	require_once ("Iris.class.php"); 
	
	$uneIris = new Iris (); 

	$uneIris-> charger (); 

	echo "<h3> Liste des initiaux </h3>"; 
	echo $uneIris->afficherLesInitiaux (); 

	echo "<h3> Liste des Alternants </h3>"; 
	echo $uneIris->afficherLesAlternants (); 

	echo "<h3> Liste des Professeurs </h3>"; 
	echo $uneIris->afficherLesProfesseurs (); 


?>