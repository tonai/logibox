<?php
session_start();
?>

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
			mysql_connect("localhost", "root", "");
			mysql_select_db("sondage");
			if(isset($_POST['PDA']))
			{
			$q1=$_POST['PDA'];
			mysql_query("UPDATE reponse SET q1='$q1' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['transport_commun']))
			{
			$q2=$_POST['transport_commun'];
			mysql_query("UPDATE reponse SET q2='$q2' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['metro']))
			{
			$q31=$_POST['metro'];
			mysql_query("UPDATE reponse SET q31='$q31' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q31='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['bus']))
			{
			$q32=$_POST['bus'];
			mysql_query("UPDATE reponse SET q32='$q32' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q32='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['tramway']))
			{
			$q33=$_POST['tramway'];
			mysql_query("UPDATE reponse SET q33='$q33' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q33='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['RER']))
			{
			$q34=$_POST['RER'];
			mysql_query("UPDATE reponse SET q34='$q34' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q34='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['taxi']))
			{
			$q4=$_POST['taxi'];
			mysql_query("UPDATE reponse SET q4='$q4' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['Internet']))
			{
			$q5=$_POST['Internet'];
			mysql_query("UPDATE reponse SET q5='$q5' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['site_covoiturage']))
			{
			$q6=$_POST['site_covoiturage'];
			mysql_query("UPDATE reponse SET q6='$q6' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['voiture']))
			{
			$q7=$_POST['voiture'];
			mysql_query("UPDATE reponse SET q7='$q7' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['covoiturage_client']))
			{
			$q8=$_POST['covoiturage_client'];
			mysql_query("UPDATE reponse SET q8='$q8' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['covoiturage_chauffeur']))
			{
			$q9=$_POST['covoiturage_chauffeur'];
			mysql_query("UPDATE reponse SET q9='$q9' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['travail']))
			{
			$q101=$_POST['travail'];
			mysql_query("UPDATE reponse SET q101='$q101' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q101='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['long_trajet']))
			{
			$q102=$_POST['long_trajet'];
			mysql_query("UPDATE reponse SET q102='$q102' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q102='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['cinema']))
			{
			$q103=$_POST['cinema'];
			mysql_query("UPDATE reponse SET q103='$q103' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q103='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['restaurant']))
			{
			$q104=$_POST['restaurant'];
			mysql_query("UPDATE reponse SET q104='$q104' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q105='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['autre']))
			{
			$q105=$_POST['autre'];
			mysql_query("UPDATE reponse SET q105='$q105' WHERE pseudo='$pseudo'");
			}
			else
			{
			mysql_query("UPDATE reponse SET q106='' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['texte']))
			{
			$q106=$_POST['texte'];
			mysql_query("UPDATE reponse SET q106='$q106' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['covoiturage_taxi']))
			{
			$q11=$_POST['covoiturage_taxi'];
			mysql_query("UPDATE reponse SET q11='$q11' WHERE pseudo='$pseudo'");
			}
			if(isset($_POST['taxi_chauffeur']))
			{
			$q12=$_POST['taxi_chauffeur'];
			mysql_query("UPDATE reponse SET q12='$q12' WHERE pseudo='$pseudo'");
			}
			mysql_close();
		?>
		<div id="corps">
			<p>Merci!</p>
			<p>Si vous le souhaitez vous avez toujours la possibilité de modifier vos réponse en revenant <a href="enquete.php">ici</a>.</p>
		</div>
   </body>
</html>
