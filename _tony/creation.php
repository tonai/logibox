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
	?>
		<div id="corps">
			<p>Créez votre compte :</p>
			<form method="post" action="validation.php">
				<p>
					<label>Identifiant : <input type="text" name="pseudo"/></label><br/>
					<label>Mot de passe : <input type="password" name="MDP"/></label><br/>
					<label>Confirmation : <input type="password" name="confirm"/></label>
					<input type="submit"/>
				</p>
			</form>
		</div>
   </body>
</html>
