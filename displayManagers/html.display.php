<?php
require_once(ROOT_PATH.'/lib/displayManager.lib.php');

class displayHtml extends displayManager {

    function __construct(&$core) {
        parent::__construct($core);
    }
	
	protected function displayHead() {
        header('Content-type: text/html; charset=UTF-8;');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Portail Logibox</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH.'/css/logibox.css';?>" media="screen">
<?php
    if(is_object($this->moduleManager->modules[$_GET['module']])) {
        $this->moduleManager->modules[$_GET['module']]->displayHead();
    }
?>
</head>
<?php
    }
    
	protected function displayBody() {
?>
<body onload="load()" onunload="GUnload()">
    <div id="global">
        <div id="header">
        <ul id="menu">
<?php
    foreach($this->db->query("SELECT * FROM `menu` WHERE `id`!=0 AND `id`!=1 ORDER BY `id` DESC") as $buff) {
        echo "\n<li id=\"".$buff['name']."\">";
        echo "\n\t<a href=\"#\">";
        echo "\n\t\t<ul>";
        foreach($this->db->query("SELECT * FROM `modules` WHERE `gid`=".$buff['id']."") as $buff2) {
            echo "<li>";
            echo "<a href=\"?module=".$buff2['file']."\">";
                echo $buff2['name'];
            echo "</a>";
            echo "</li>";            
        }
        echo "\n\t\t</ul>";
        echo "\n\t</a>";
        echo "\n</li>";
    }
?>        
            <li>
                <a href="?module=accueil" id="accueil"></a>
            </li>
        </ul>
        </div>
        <div id="leftPanel">
            <div class="panelContent">
<?php
    foreach($this->moduleManager->modules as $module){
        if(is_object($module)) $module->displayDiv();
    };
?>
            </div>
            <div class="panelFoot">
            </div>
        </div> 
        <div id="mainPage">
<?php
    if(is_object($this->moduleManager->modules[$_GET['module']])) {
        $this->moduleManager->modules[$_GET['module']]->displayPage();
    }
?>
        </div>
           
    </div>
    <div id="footer">
        
    </div>
</body>
<?php        
    }
}
?>