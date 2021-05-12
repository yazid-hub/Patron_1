<?php
	class Singleton
	{
		private static $unPdo;

		private function __construct(){
        try{
            Singleton :: $unPdo = new PDO ("mysql:host=localhost:8889;dbname=iris_sd","root", "root");
            }
            catch (PDOException $exp)
            {
            	echo "Erreur de connexion à la base de données";
            }
        }
        
        private function __clone (){

        }

        public static function getConnexion ()
        {
			if (is_null(Singleton::$unPdo ))
			{
			 	  new Singleton () ;
			}
			return Singleton::$unPdo ; 
		}

    }
?>