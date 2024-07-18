<?php
define('ROOT_PATH', '.');

require_once(ROOT_PATH.'/lib/core.lib.php');

$core=new Core();
$core->performAction();
$core->display();
?>
