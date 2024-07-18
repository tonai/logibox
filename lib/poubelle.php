        if (isset($_GET['deconnect'])) {	
			session_unset();
			if (isset($_COOKIE['logibox'])) 
			{	
				setcookie('icelsius',false,time()+60*60*24*30,'','');
			}
			$this->admin->vide();
			$this->utile->redirection('index.php');
		}
		if (isset($_COOKIE['icelsius'])) // On renouvelle les paramètres de session à partir du login
		{	
			$_SESSION['identifiant']=$_COOKIE['icelsius'];
			setcookie('icelsius',$_COOKIE['icelsius'],time()+60*60*24*30,'','');
			$this->creer_session();
		}
		if($this->formulaire->existpost(array('login','mdp'))) // Validation issue du module Login 
		{	
			if(!$this->formulaire->fullpost(array('login','mdp'))) 
			{	
				$this->erreurlogin="Login incorrect...&nbsp;&nbsp;&nbsp;";// todo s'affiche pas
			}
			else
			{	
				$buff=$this->db->selection('utilisateurs','login',$_POST['login'],'',0);//todo
				if(empty($buff) or $buff['mdp']!=md5($_POST['mdp'])) 
				{	
					$this->erreurlogin="Login incorrect...&nbsp;&nbsp;&nbsp;";
				}
				else
				{	
					if(!isset($_POST['co'])) 
					{	
						$_SESSION['identifiant']=$_POST['login'];
					}
					else
					{
						setcookie('icelsius',$_POST['login'],time()+60*60*24*30,'','');						
					}
					$this->utile->redirection('index.php');
				}
			}
		}
		if(isset($this->core->module))
		{
			if (($this->core->module!='admin' && !$this->admin->aacces($this->core->module)) || ($this->core->module=='admin' && !$this->admin->estadmin('intranet'))||$this->core->module=="inscription" && $this->admin->estidentifie())
			{
				$this->utile->redirection('index.php');
			}	
		}
	
		if($this->admin->estidentifie() && isset($_GET['act']) && $_GET['act']=="Arcade" && isset($_GET['do']) && $_GET['do']=="newscore")
		{
			
			if($_POST['gname']=='yeti9') 
			{
				$buff=$this->db->selection('jeux','fichier','yeti9','',0);
				$_POST['gameid']=$buff['id'];
			}
			$buff=$this->db->selection('score',array('id_user','jeu'),array($_SESSION['id'],$_POST['gameid']));
			if(!empty($buff['score']) && $_POST['gscore']!="NaN" && $buff['score']<$_POST['gscore']) $this->db->modification('score','score',$_POST['gscore'],'id',$buff['id']);
			elseif(empty($buff['score'])) $this->db->ajout('score',array('id_user','jeu','score'),array($_SESSION['id'],$_POST['gameid'],$_POST['gscore']));
			$this->utile->redirection('?menu=bonus&module=jeux&action=scores');
		}
	}
	
	/** 
	 *	Charge les pr�f�rences d'un utilisateur depuis la base de donn�es dans les variables de session
	 *
	 *	@author		Pierre Claudon <claudon.pierre@gmail.com>
	 */
	
	function creer_session()
	{
		$buff=$this->db->selection('utilisateurs','login',$_SESSION['identifiant'],'',0);
		$_SESSION['identifiant']=$buff["login"];
		$_SESSION['id']=$buff["id"];
		$_SESSION['prenom']=$buff["prenom"];
		$_SESSION['nom']=$buff["nom"];
		//$_SESSION['droits']=$buff2["droits"];
	}
	
	
	function login()
	{	
		if($this->admin->estidentifie())
		{	
?>	
			<?php echo 'Bonjour '.$_SESSION['identifiant']; ?>
			<br/>
			<form method="post" action="index.php">
				<input type="checkbox" name="deconnexion"/><label for="deconnexion">d�connexion</label><br/>
				<input  type="submit" id="deco">
			</form>
<?php	
		}
		else
		{
			?>
			<form method="post" action="index.php">
					identifiez-vous :<br/>
					<input type="text" name="pseudo" value="identifiant" size="15"/><br/><br/>
					<input type="password" name="MDP" value="mot de passe" size="15"/><br/>
					<a href="creation.php">enregistrez-vous</a><br/>
					<input  type="submit" id="ok">
			</form>
<?php

  		}
	}

	// Affichage de l'en-tête
	function en_tete()
	{	
		
		session_name(md5('yechteamisgoodforyou'));
		session_start();
		session_regenerate_id();
		if(isset($_SESSION['identifiant']) && !isset($_SESSION['nom']))
		{
			$this->creer_session();
		}
		$this->action();
		
		if(!$this->module_manager->module->identification  || $this->module_manager->module->identification && $this->admin->estidentifie())
		{	
			$this->module_manager->module->action();
		}
?>
		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Le site du groupe projet Logibox! - Ecole Centrale de Lille</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></meta>
		<link rel="stylesheet" type="text/css" href="css/design.css"></link>
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="design_ie.css" />
		<![endif]-->
<?php
		if(!$this->module_manager->module->identification  || $this->module_manager->module->identification && $this->admin->estidentifie()) $this->module_manager->en_tete();


?>
	
	</head>
<?php
	}
	

	// Affichage du corps
	function corps()
	{
		echo "\n<body>\n";
		
		echo "\n\t\t<div id=\"header\">";
		//if ($this->admin->estidentifie()) 
		$this->module_manager->menu();
		
		
		echo "\n\t\t\t<div id=\"login\">";
		$this->login();
		echo "</div>";			

		
		echo "\n\t\t</div>\n";
		
		echo "\n\t\t<div id=\"corps\">";
		if(!$this->module_manager->module->identification  || $this->module_manager->module->identification && $this->admin->estidentifie()) $this->module_manager->module->corps();
		else echo "Pour acc�der � cette section tu dois d'abord t'inscrire !";
		echo "\n\t\t</div>\n";
		
		echo "\n\t\t<div id=\"gauche\">";
		echo "\n\t\t</div>\n";
		
		echo "\n\t\t<div id=\"bas\">";
		echo "\n\t\t</div>\n";
		
		
	}
	
	// Affichage du pied de page
	function pied() 
	{
		$this->module_manager->module->pied();
		mysql_close();
		echo "\n</body>";
		echo "\n</html>";
	}
	
	// Affichage de la page
	function affiche() 
	{
		$this->en_tete();
		$this->corps();
		$this->pied();
	}
}
<?php
/**
 * PHP Template.
 */

?>
