<?php

require_once(ROOT_PATH.'/lib/rootClass.lib.php');
require_once(ROOT_PATH.'/lib/moduleManager.lib.php');
require_once(ROOT_PATH.'/lib/displayManager.lib.php');
require_once(ROOT_PATH.'/lib/user.lib.php');
require_once(ROOT_PATH.'/lib/tools.lib.php');


class Core extends RootClass {
	
    /**
    *   @desc       Tableau des paramètres de connexion à la base de données
    *   @type       array      
    **/
    private $dbConfig;
    
    private $displayManager;
    public $moduleManager;
    public $db;
    public $user;
    public $tools;
    public $config;
    
    function __construct() {	
        // TODO : $this->style
        
        /* Connexion à la base de données */
        require_once(ROOT_PATH.'/conf/db.conf.php');
        if(!isset($config['db']['numport'])) $config['db']['numport']=3306; 
        $this->db=false;try {
            $this->db=new PDO('mysql:host='.$config['db']['hostname'].';dbname='.$config['db']['database'].'', 
                                            $config['db']['username'], 
                                            $config['db']['password'],
                                            array(PDO::ATTR_PERSISTENT => true)
            );
        }
        catch (PDOException $e) {
            echo "Erreur ! : " . $e->getMessage() . "<br/>";
            die();
        }
        
        $this->user=new user($this);
        $this->tools=new tools($this);
        
        $this->moduleManager=new moduleManager($this);
        
        session_start();
        session_regenerate_id();
        session_name(md5('logiboxisgoodforyou'));
    }	
	
    public function performAction() {	
        if(isset($_GET['action'])) {
            if('logout'==$_GET['action']) $this->user->logout();
            elseif(isset($_GET['module'])  && !empty($_GET['module'])) {
                $this->moduleManager->action($_GET['module'],$_GET['action']); 
            }   
        }   
    }          
        
    public function display() {
        switch($_GET['display']) {
            case 'rss':
                require_once(ROOT_PATH.'/displayManagers/rss.display.php');
				$this->displayManager=new displayRss($this);
				break;
            case 'xml':
                require_once(ROOT_PATH.'/displayManagers/xml.display.php');
				$this->displayManager=new displayXml($this);
				break;
            default:
                require_once(ROOT_PATH.'/displayManagers/html.display.php');
                $this->displayManager=new displayHtml($this);
                break;
        }
		$this->displayManager->display();
	}
}
?>
