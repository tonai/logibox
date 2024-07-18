<?php
require_once(ROOT_PATH.'/lib/displayManager.lib.php');

class displayXml extends displayManager {

    function __construct(&$core) {
        parent::__construct($core);
    }
	
	protected function displayHead() {
       header("Content-Type: application/xml; charset=UTF-8"); 
       echo '<?xml version="1.0" encoding="UTF-8"?>';
    }
   
    protected function displayBody() {
        /*echo "<root>";
        if(is_object($this->moduleManager->modules[$_GET['module']])) {
            $this->moduleManager->modules[$_GET['module']]->displayPage();
        }
        
        echo "</root>";*/
   }
}
?>
