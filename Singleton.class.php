class Singleton
{
    // Définition d'une variable privée et statique pour stocker l'unique instance de la classe
    private static $unPdo;

    // Définition d'un constructeur privé pour empêcher la création d'instances multiples de la classe
    private function __construct(){
        // Tentative de connexion à la base de données en utilisant PDO
        try{
            // Stockage de l'instance de PDO dans la variable statique de la classe
            Singleton :: $unPdo = new PDO ("mysql:host=localhost:8889;dbname=iris_sd","root", "root");
        }
        catch (PDOException $exp)
        {
            // Affichage d'un message d'erreur en cas d'échec de connexion
            echo "Erreur de connexion à la base de données";
        }
    }
    
    // Définition d'une méthode privée pour empêcher la duplication d'instances de la classe
    private function __clone (){

    }

    // Définition d'une méthode publique statique pour récupérer l'unique instance de la classe
    public static function getConnexion ()
    {
        // Vérification si l'unique instance de la classe a déjà été créée
        if (is_null(Singleton::$unPdo ))
        {
            // Création de l'unique instance de la classe si elle n'a pas encore été créée
            new Singleton () ;
        }
        // Retour de l'unique instance de la classe
        return Singleton::$unPdo ; 
    }

}
