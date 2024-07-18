<?php
class moduleManager {

    private $core;
    public $modules;
    private $db;
    
    function __construct(&$core) {
        $this->core=$core;
        $this->db=$core->db;
        $this->modules=array();
        $this->loadModulesFromDb($_GET['module']);
    }
    
    private function loadModule ($name) {
        include_once(ROOT_PATH.'/modules/'.$name.'.mod.php');
        $this->modules[$name]=new $name($this->core);
    }
    
    private function loadModulesFromDb ($module) {
        // TODO : Gérer les dépendances des modules si besoin
        foreach ($this->db->query("SELECT * FROM `modules` WHERE (`load`='start' OR `file`='".$module."')") as $buff ) {
            $this->loadModule($buff['file']);
        }
        
    }    
    
    public function action($module,$action) {
		if(is_object($this->modules[$module])) {
                $this->modules[$module]->action($action);
        }
    }
}
?>