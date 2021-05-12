<?php
    /*
        type : Initial , Professeur, Alternant 
    */
    require_once ("Initial.class.php"); 
    require_once ("Alternant.class.php"); 
    require_once ("Professeur.class.php"); 

    class FabriquePersonne{

        public static function getInstance($nom,$prenom,$attribut,$type)
        { 

            if(class_exists($type))
            { 
                $uneInstance = new $type ($nom,$prenom,$attribut);  
                return $uneInstance; 
            }else{
                    echo "erreur, cette classe n'existe pas";
            }      
        }
    }
?>