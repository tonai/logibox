<div id="menu">
	<a id="equipe" href="index.php?module=equipe"></a>
	<a id="pratique" href="index.php?module=pratique"></a>
	<a id="communaute" href="index.php?module=communaute"></a>
	<a id="trajets" href="index.php?module=trajets"></a>
	<a id="accueil" href="index.php?module=accueil"></a>
<?php
$existe=0;
if (!isset($_SESSION['pseudo']))
	$_SESSION['pseudo']='';
if (!isset($_SESSION['MDP']))
	$_SESSION['MDP']='';
$pseudo=$_SESSION['pseudo'];
$MDP=$_SESSION['MDP'];
mysql_connect("localhost", "logibox", "xobigol");
mysql_select_db("projet");
$reponse=mysql_query("SELECT pseudo,mdp FROM reponse") or die(mysql_error());
while($donnees=mysql_fetch_array($reponse))
{
	if ($_SESSION['pseudo']==$donnees['pseudo'] && $_SESSION['MDP']==$donnees['mdp'])
	{
	$existe=1;
	}
}
mysql_close();
if ($existe==1)
{
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
else
{
?>
	<div id="login">
		<form method="post" action="index.php">
				identifiez-vous :<br/>
				<input type="text" name="pseudo" value="identifiant" size="15"/><br/><br/>
				<input type="password" name="MDP" value="mot de passe" size="15"/><br/>
				<a href="creation.php">enregistrez-vous</a><br/>
				<input  type="submit" id="ok">
		</form>
	</div>
<?php
}
?>
</div>
<div id="gauche">
	<?php
		include('shoutbox.php');
	?>
</div>
<div id="bas">
</div>
