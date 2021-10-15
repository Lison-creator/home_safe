<?php 
abstract class UxDB {
//abstract = sécurise mon code pour les webdev, je ne peux pas créer de nouvelles connexion
	private static $_connexion;
    //private : pour sécuriser (protected, public)
    //static: pas besoin de créer un objet connexion pour y accéder

    // déclenché lorsque
    // $c = new connexion()
	public function __construct()
	{
		$this->dbConnexion();
	}

	protected function dbConnexion()
    {
        // self::   car $_connexion est static
        // cad accessible sans créer d'object
        // si déjà une connexion, alors on la réutilise
    	if (self::$_connexion !== null) {
    		return self::$_connexion;
    	}
        // sinon
        // créer un objet connexion
        // 1) moteur de base de données : mysql
        // 2) où se situe la base de données : localhost /!\ production
        // 3) le nom de la base de données : web10
        // 4) l'encodage de caractère : utf8
        // 5) le login pour se connecter à la db : root /!\ production
        // 6) le mdp pour se connecter à la db 
        // xampp : '' // pas de mdp /!\ production
        // mamp : 'root'
        // production : lorsque vous mettrez en ligne votre site vous recevrez de votre fournisseur les données 2, 5, 6
        self::$_connexion = new PDO("mysql:host=localhost;dbname=home_safe;charset=utf8", 'root', '');
        // ::Default : mode par défaut de récupération de données
        // :: données sous forme tableau associatif
        self::$_connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // retourne la connexion
        return self::$_connexion;
    }

    // permet d'exécuter facilement une query
    protected function execute($query, $params= array(), $fetchMode = null)
    {//fecthMode : les différentes manières que tu peux récupérer tes infos et comment les arranger dans ton tableau

        //prépare la requeête pour éviter les injections SQL
    	$stmt = self::$_connexion->prepare($query);
        //exécute la requête
    	$stmt->execute($params);

        
    	if ($fetchMode !== null) {
    		return $stmt->fetchAll($fetchMode);
    	} else {
    		return $stmt->fetchAll();
            //retourne tout sous forme de tableau
    	}
    	return $stmt; // Iterator (forearch)
    }
}



 ?>