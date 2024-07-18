<?php
abstract class DisplayManager extends RootClass {

    public $core;
    public $db;
    public $moduleManager;
    
    function __construct(&$core) {
        $this->moduleManager=$core->moduleManager;
        $this->db=$core->db;
    }

    public function display() {
        $this->displayHead();
        $this->displayBody();
    }
    
    abstract protected function displayHead();
	abstract protected function displayBody();
}

/*
if(isset($_GET['menu']))
		{
			$buff=$this->db->selection('menu','nom',$_GET['menu'],'',0);	
			if(isset($buff)) $this->menu=$_GET['menu'];
			else $this->menu="accueil";
		}
		else $this->menu="accueil";
		
		/* 	
			Charge le premier module par d�faut 
			Sinon redirige vers le menu accueil si la variable GET ne correspond pas � un module existant pour le menu choisi
	
		if(isset($_GET['module'])) 
		{		
				$buff=$this->db->selection('menu','nom',$this->menu,'',0);
				$buff2=$this->db->selection('sous_menu',array('id_menu','module'),array($buff['id'],$_GET['module']),'',0);
				if(isset($buff2) || $_GET['module']=="inscription") $this->module=$_GET['module'];
				else 
				{
					$this->menu="accueil";
					$this->module="accueil";
				}
		}
		else 
		{
			$buff=$this->db->selection('menu','nom',$this->menu,'',0);
			$buff2=$this->db->selection('sous_menu','id_menu',$buff['id'],'ordre',0);
			if(isset($buff2['module'])) $this->module=$buff2['module'];
			else 
			{
				$this->menu="accueil";
				$this->module="accueil";
			}
		}
		$this->module_manager->charge($this->module);
	}
*/

?>