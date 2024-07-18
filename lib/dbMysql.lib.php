<?php

class DbMysql {
    
    /**
    *   @desc       Tableau des paramètres de connexion à la base de données
    *   @type       array      
    **/
    private $config;
    
    /**
    *   @desc      Lien vers la ressource de connexion
    *   @type      resource
    **/
    
    private $connectId;
        
    /**
    *   @desc       Initialise la connexion au serveur.
    *   @param      array $config Tableau de configuration de la classe
    *   @return     -
    **/
	
    function dbMysql(&$config) {
	$this->config=$config;
	$this->config['port']=if(!isset($config['port']))?$config['port']:3306; 
	$this->connect_id=false;	
        try {
            $this->connectId = new PDO( 'mysql:host=.'$this->config['host']'.;dbname='.$this->config['database'].'', 
                                        $this->config['user'], 
                                        $this->config['password'],
                                        array(PDO::ATTR_PERSISTENT => true)
            );
        } 
        catch (PDOException $e) {
            echo "Erreur ! : " . $e->getMessage() . "<br/>";
            die();
        }
            
    /**
    *   @desc           Protège les donnée entrées d'une injection SQL.
    *   @param          (array|string) $element
    *   @return         (array|string)
    *   @comment        A utiliser avant d'executer une requête.
    * 				$_POST=dbProtect($_POST);
    * 				$chaine=dbProtect($chaine);
    **/
    
    function dpProtect($element) {
        if(is_array($element)) {
            return array_map($this->dbProtect,$element);
    	}
    	else {	
            if(get_magic_quotes_gpc) {
                $element=stripslashes($element);
            }
            if(is_string($element)) {
		$element=mysql_real_escape_string($element);
            }
            return $element;
	}
    }
        
        
}
?>
