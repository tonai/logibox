<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class Login extends module {
 
    function __construct(&$core) {
        parent::__construct($core);
    }
    
    public function displayDiv() {
?>    
    <div id="login">
	<?php echo " Bonjour $pseudo"; ?>
			<br/>
			<form method="post" action="index.php">
				<input type="checkbox" name="deconnexion"/><label for="deconnexion">déconnexion</label><br/>
				<input  type="submit" id="deco">
			</form>
	</div>
<?php
    }
}

?>