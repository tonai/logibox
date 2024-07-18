<h1>Messages Express</h1>
<?php
	mysql_connect("localhost", "logibox", "xobigol");
mysql_select_db("projet");
	$id=$_GET['message'];
	$reponse=mysql_query('SELECT pseudo, titre, message FROM shoutbox WHERE id='.$id) or die(mysql_error());
	$donnees=mysql_fetch_array($reponse);
	$message=nl2br(htmlspecialchars($donnees['message']));
	$message=str_replace("&acute","'",$message);
	$pseudo_message=$donnees['pseudo'];
	echo '<h2>Message posté par '.$pseudo_message.'</h2><br/>';
	echo '<p>'.$message.'</p>';
	mysql_close();
?>
