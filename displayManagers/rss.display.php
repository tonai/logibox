<?php
require_once(ROOT_PATH.'/lib/displayManager.lib.php');

class displayRss extends displayManager {

    function __construct(&$core) {
        parent::__construct($core);
    }
	
	protected function displayHead() {
       header("Content-Type: application/xml; charset=UTF-8"); 
       echo '<?xml version="1.0" encoding="UTF-8"?>';
    }
   
    protected function displayBody() {
?>
<rss version="2.0">
<?php          
        if(is_object($this->moduleManager->modules[$_GET['module']])) {
            $this->moduleManager->modules[$_GET['module']]->displayPage();
        }
?>        
</rss>                
<?php        
   }
}
?>
