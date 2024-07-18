<?php
abstract class module extends rootClass {
    
    protected $core;
    protected $db;
    protected $tools;
   
    function __construct(&$core) {
        $this->core=$core;
        $this->db=$core->db;
        $this->tools=$core->tools;
    }

    public function action($action){
    }
    
    public function displayHead(){        
    }
    
    public function displayDiv(){
    }
    
    public function displayPage(){
    }
    
    
}
?>