<h2>Messages Express</h2>
<p>
	<strong><a href="index.php?module=ecrire_message">Ecrire un message</a></strong><br/>
	<strong><a href="index.php?module=voir_messages">Voir tous les messages</a></strong>
</p>
<hr/>
<?php
	mysql_connect("localhost", "logibox", "xobigol");
mysql_select_db("projet");
	$reponse=mysql_query('SELECT id, pseudo, titre FROM shoutbox ORDER BY id DESC LIMIT 0,5') or die(mysql_error());
	while($donnees=mysql_fetch_array($reponse))
	{
		$auteur=$donnees['pseudo'];
		$titre=$donnees['titre'];
		echo "<dl><dt>";
		echo 'auteur : '.nl2br(htmlspecialchars($auteur));
		echo '</dt><dd id="message_shoutbox"><a href="index.php?module=affiche_message&amp;message='.$donnees['id'].'">';
		$titre=str_replace("&acute","'",$titre);
		if(strlen($titre)>120)
			$titre=substr($titre, 0, 117).'...';
		echo nl2br(htmlspecialchars($titre));
		echo "</a></dd></dl><hr/>";
	}
	mysql_close();
?>
