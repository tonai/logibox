<h1>Messages Express</h1>
<h2>Voir tout les messages</h2>
<br/>   
<?php
	mysql_connect("localhost", "logibox", "xobigol");
mysql_select_db("projet");
	$reponse=mysql_query("SELECT COUNT(id) FROM shoutbox") or die(mysql_error());
	$donnees=mysql_fetch_row($reponse);
	if (!isset($_GET['page']))
	{
		$message=0;
		$page_actuelle=1;
	}
	else
	{
		$message=10*($_GET['page']-1);
		$page_actuelle=$_GET['page'];
	}
	$pages_totale=ceil(($donnees[0])/10);
	$pages=$pages_totale;
	if ($pages>10)
		$pages=10;
	echo '<p id="page">';
	if ($page_actuelle!=1)
	{
		$page_prec=$page_actuelle-1;
		echo '<a href="index.php?module=voir_messages&amp;page='.$page_prec.'">page précédante</a>&nbsp&nbsp;';
	}
	echo '<a href="index.php?module=voir_messages&amp;page=1">page 1</a>&nbsp&nbsp;';
	if ($page_actuelle<=5)
	{
		$i=2;
		if ($pages>9)
			$pages=9;
	}
	elseif ($page_actuelle>=($pages_totale-4) and $page_actuelle>5)
	{
		$i=$pages_totale-7;
	}
	else
	{
		$i=$page_actuelle-3;
		$pages=$page_actuelle+3;
	}
	for ($i;$i<$pages;$i++)
	{
		echo '<a href="index.php?module=voir_messages&amp;page='.$i.'">page '.$i.'</a>&nbsp&nbsp;';
	}
	echo '<a href="index.php?module=voir_messages&amp;page='.$pages_totale.'">page '.$pages_totale.'</a>&nbsp&nbsp;';
	if ($page_actuelle!=$pages_totale)
	{
		$page_suiv=$page_actuelle+1;
		echo '<a href="index.php?module=voir_messages&amp;page='.$page_suiv.'">page suivante</a>';
	}
	echo '<p/><br/>';
	$reponse=mysql_query('SELECT id, pseudo, titre FROM shoutbox ORDER BY id DESC LIMIT '.$message.',10 ') or die(mysql_error());
	while($donnees=mysql_fetch_array($reponse))
	{
		echo "<dl><dt>";
		echo 'auteur : '.nl2br(htmlspecialchars($donnees['pseudo']));
		echo '</dt><dd id="message_shoutbox"><a href="index.php?module=affiche_message&amp;message='.$donnees['id'].'">';
		echo nl2br(htmlspecialchars($donnees['titre']));
		echo "</a></dd></dl><hr/>";
	}
	mysql_close();
?>
