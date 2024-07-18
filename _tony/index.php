<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Le site du groupe projet Logibox! - Ecole Centrale de Lille</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="author" content="Logibox Team" />
		<meta name="description" content="Logibox" />
		<meta name="keywords" content="Logibox" />
	   	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css"/>
	</head>
	<body>
		<?php 
		if (isset($_POST['deconnexion']))
		{
			$_SESSION['pseudo']='';
			$_SESSION['MDP']='';
		}
		if (isset($_POST['pseudo']))
			$_SESSION['pseudo']=$_POST['pseudo'];
		if (isset($_POST['MDP']))
			$_SESSION['MDP']=$_POST['MDP'];
		include('menu.php');
		?>
		<div id="corps">
			<?php
				if (isset($_GET['module']))
				{
					if($_GET['module']=="accueil")
						include('accueil.html');
					if($_GET['module']=="trajets")
						include('trajets.html');
					if($_GET['module']=="communaute")
						include('communaute.html');
					if($_GET['module']=="pratique")
						include('pratique.html');
					if($_GET['module']=="equipe")
						include('equipe.html');
					if($_GET['module']=="equipe_projet")
						include('equipe_projet.html');
					if($_GET['module']=="equipe_eleves")
						include('equipe_eleves.html');
					if($_GET['module']=="equipe_encadrants")
						include('equipe_encadrants.html');
					if($_GET['module']=="equipe_partenaire")
						include('equipe_partenaire.html');
					if($_GET['module']=="equipe_ecole")
						include('equipe_ecole.html');
					if($_GET['module']=="ecrire_message")
						include('ecrire_message.php');
					if($_GET['module']=="voir_messages")
						include('voir_messages.php');
					if($_GET['module']=="affiche_message")
						include('affiche_message.php');
				}
				else
				{
					include('accueil.html');
				}
			?>
		</div>
	</body>
</html>
