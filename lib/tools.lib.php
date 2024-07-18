<?php
class tools extends RootClass {

    public $core;
    
    function __construct(&$core) {
        $this->core=$core;
    }
    
    public function redirection($url) {
        header('Location: '.$url);
    }
}
?>
