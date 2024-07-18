<h1>Messages Express</h1>
<h2>Ecrire un message</h2>
<br/>
<br/>
<?php
	mysql_connect("localhost", "logibox", "xobigol");
mysql_select_db("projet");
	$reponse=mysql_query("SELECT pseudo, mdp FROM reponse") or die(mysql_error());
	$existe=0;
	while($donnees=mysql_fetch_array($reponse))
	{
		if($pseudo==$donnees['pseudo'] && $MDP==$donnees['mdp'])
		{
			if(isset($_POST['titre']) and isset($_POST['message']))
			{
				if($_POST['titre']!='' and $_POST['message']!='')
				{
					echo '<p id="erreur">Votre message à bien été enregistré</p>';
					$titre=$_POST['titre'];
					$titre=str_replace("'","&acute;",$titre);
					$message=$_POST['message'];
					$message=str_replace("'","&acute;",$message);
					mysql_query("INSERT INTO shoutbox(pseudo,titre,message) VALUES('$pseudo','$titre', '$message')") or die(mysql_error());
				}
				else
				{
					echo '<p id="erreur">Votre message n\'est pas valide</p>';
				}
			}
?>
<p>
	Pour faciliter la compréhension de chacun, merci de bien vouloir choisir un titre clair et concit contenant au moins les destinations de départ et d'arrivées ainsi que la date. Vous pouvez par exemple utilisez les modèles suivants :<br/>
	[recherche] Lille cité scientifique - Lille V2 - 30/08/2008.<br/>
	[propose] Paris - Nantes - 19/08/2008.
</p>
<form method="post" action="index.php?module=ecrire_message">
	<fieldset>
		<legend><strong>Votre message :</strong></legend>
		<p>
			<label for="titre">Titre : </label>
			<input type="text" name="titre" id="titre" size="104" value="<?php if(isset($_POST['titre']))	echo $_POST['titre'];	?>"/>
		</p>
		<br/>
		<p>
	       <label for="message">Taper ici votre message :</label><br/>
	       <textarea name="message" id="message" rows="10" cols="83"><?php
				if(isset($_POST['message']))
					echo $_POST['message'];
			?></textarea>
	   </p>
	   <br/>
	   <p>
		<input type="submit"/>
		<input type="reset" />
	   </p>
	  </fieldset>
</form>
<?php
			$existe=1;
		}
	}
	if ($existe==0)
	{
		echo "<p>désolé, il faut être connecté pour pouvoir poster un message</p>";
	}
	mysql_close();
?>
