<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Fantastic figurines</title>
       <meta http-equiv="Content-Type" content="text/html; 
charset=iso-8859-1" />
	   <meta name="author" content="Logibox Team" />
	   <meta name="description" content="Sondage" />
	   <meta name="keywords" content="Sondage, covoiturage" />
	   <link rel="stylesheet" media="screen" type="text/css" title="Design" 
href="design.css" />
   </head>
   <body>
   <?php
	include('menu.php');
	$existe3=0;
   ?>
		<div id="corps">
			<p>
				<?php
					if($_POST['pseudo']!="" && $_POST['MDP']!="" && $_POST['confirm']!="")
					{
						$pseudo=$_POST['pseudo'];
						$MDP=$_POST['MDP'];
						$confirm=$_POST['confirm'];
						if($MDP==$confirm)
						{
							mysql_connect("localhost", "root", "");
							mysql_select_db("sondage");
							$reponse=mysql_query("SELECT pseudo,mdp FROM reponse") or die(mysql_error());
							while($donnees=mysql_fetch_array($reponse))
							{
								if($pseudo==$donnees['pseudo'])
								{
									echo "ce pseudo éxiste déjà. Veuillez en choisir un autre en vous rendant <a href=\"creation.php\">ici</a>.";
									$existe3=1;
								}
							}
							if($existe3==0)
							{
								echo "Merci de vous être inscrit.<br/>Votre login d'identification est : $pseudo<br/>Votre mot de passe est : $MDP";
								mysql_query("INSERT INTO reponse(id,pseudo,mdp) VALUES('','$pseudo', '$MDP')");
							}
							mysql_close();
						}
						else
						{
							echo "Le mot de passe et la confirmation ne sont pas identique. Veuillez recommencer en cliquant <a href=\"creation.php\">ici</a>.";
						}
					}
					else
					{
						echo "héhé, n'essaye pas de me rouler, ça ne marche pas.";
					}
				?>
		</p>
   </body>
</html>
