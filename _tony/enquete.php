<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Sondage Logibox</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <meta name="author" content="Logibox" />
	   <meta name="description" content="Sondage" />
	   <meta name="keywords" content="Sondage" />
	   <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css" />
   </head>
   <body>
		<?php
			include('menu.php');
		?>
		<div id="sous_menu">
			<a href="coucou.html" id="forum"></a>
		</div>
		<div id="corps">
		<?php
			$existe2=0;
			mysql_connect("localhost", "root", "");
			mysql_select_db("sondage");
			function radio($question,$choix)
			{
				$par_defaut = '';
				if ($question==$choix)
				{
					$par_defaut='checked="checked"';
				}
				return $par_defaut;
			}
			function checkbox($question)
			{
				$par_defaut = '';
				if ($question=='on')
				{
					$par_defaut='checked="checked"';
				}
				return $par_defaut;
			}
			$reponse=mysql_query("SELECT * FROM reponse") or die(mysql_error());
			$total=0;
			$resultat=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
			while($donnees=mysql_fetch_array($reponse))
			{
				if($pseudo=='tonaï' && $MDP=='chouchou')
				{
					$total++;
					if($donnees['q1']=='oui')
					{
						$resultat[0]++;
					}
					elseif($donnees['q1']=='non')
					{
						$resultat[1]++;
					}
					if($donnees['q2']=='oui')
					{
						$resultat[2]++;
					}
					elseif($donnees['q2']=='non')
					{
						$resultat[3]++;
					}
					if($donnees['q31']=='on')
					{
						$resultat[4]++;
					}
					if($donnees['q32']=='on')
					{
						$resultat[5]++;
					}
					if($donnees['q33']=='on')
					{
						$resultat[6]++;
					}
					if($donnees['q34']=='on')
					{
						$resultat[7]++;
					}
					if($donnees['q4']=='oui')
					{
						$resultat[8]++;
					}
					elseif($donnees['q4']=='non')
					{
						$resultat[9]++;
					}
					if($donnees['q5']=='oui')
					{
						$resultat[10]++;
					}
					elseif($donnees['q5']=='non')
					{
						$resultat[11]++;
					}
					if($donnees['q6']=='oui')
					{
						$resultat[12]++;
					}
					elseif($donnees['q6']=='non')
					{
						$resultat[13]++;
					}
					if($donnees['q7']=='oui')
					{
						$resultat[14]++;
					}
					elseif($donnees['q7']=='non')
					{
						$resultat[15]++;
					}
					if($donnees['q8']=='oui')
					{
						$resultat[16]++;
					}
					elseif($donnees['q8']=='non')
					{
						$resultat[17]++;
					}
					if($donnees['q9']=='oui')
					{
						$resultat[18]++;
					}
					elseif($donnees['q9']=='trajet_regulier')
					{
						$resultat[19]++;
					}
					elseif($donnees['q9']=='non')
					{
						$resultat[20]++;
					}
					if($donnees['q101']=='on')
					{
						$resultat[21]++;
					}
					if($donnees['q102']=='on')
					{
						$resultat[22]++;
					}
					if($donnees['q103']=='on')
					{
						$resultat[23]++;
					}
					if($donnees['q104']=='on')
					{
						$resultat[24]++;
					}
					if($donnees['q105']=='on')
					{
						$resultat[25]++;
					}
					if($donnees['q11']=='oui')
					{
						$resultat[26]++;
					}
					elseif($donnees['q11']=='non')
					{
						$resultat[27]++;
					}
					if($donnees['q12']=='homme')
					{
						$resultat[28]++;
					}
					elseif($donnees['q12']=='femme')
					{
						$resultat[29]++;
					}
					elseif($donnees['q12']=='meme_chauffeur')
					{
						$resultat[30]++;
					}
					elseif($donnees['q12']=='peu_importe')
					{
						$resultat[31]++;
					}
				}
				if($pseudo==$donnees['pseudo'] && $MDP==$donnees['mdp'])
				{
				$q1=$donnees['q1'];
				$q2=$donnees['q2'];
				$q31=$donnees['q31'];
				$q32=$donnees['q32'];
				$q33=$donnees['q33'];
				$q34=$donnees['q34'];
				$q4=$donnees['q4'];
				$q5=$donnees['q5'];
				$q6=$donnees['q6'];
				$q7=$donnees['q7'];
				$q8=$donnees['q8'];
				$q9=$donnees['q9'];
				$q101=$donnees['q101'];
				$q102=$donnees['q102'];
				$q103=$donnees['q103'];
				$q104=$donnees['q104'];
				$q105=$donnees['q105'];
				$q106=$donnees['q106'];
				$q11=$donnees['q11'];
				$q12=$donnees['q12'];
		?>
		<form method="post" action="traitement.php">
			<h1>Sondage</h1>
			<fieldset>
				<legend><strong>Votre profil :</strong></legend>
				<p>
				Vous êtes ?<br/>
				<input type="radio" name="sexe" value="homme" <?php echo radio($q1,'homme'); ?> /><label for="homme">un homme</label><br/>
				<input type="radio" name="sexe" value="femme" <?php echo radio($q1,'femme'); ?> /><label for="femme">une femme</label>
				</p>
				<p>
				Dans quelle tranche d'age vous situez-vous ?<br/>
				<input type="radio" name="age" value="<20" <?php echo radio($q1,'<20'); ?> /><label for="<20">moins de 20 ans</label><br/>
				<input type="radio" name="age" value="20-30" <?php echo radio($q1,'20-30'); ?> /><label for="20-30">entre 20 et 30 ans</label><br/>
				<input type="radio" name="age" value="30-40" <?php echo radio($q1,'30-40'); ?> /><label for="30-40">entre 30 et 40 ans</label><br/>
				<input type="radio" name="age" value="40-50" <?php echo radio($q1,'40-50'); ?> /><label for="40-50">entre 40 et 50 ans</label><br/>
				<input type="radio" name="age" value="50-60" <?php echo radio($q1,'50-60'); ?> /><label for="50-60">entre 50 et 60 ans</label><br/>
				<input type="radio" name="age" value=">60" <?php echo radio($q1,'>60'); ?> /><label for=">60">plus de 60 ans</label><br/>
				</p>
				<p>
				Quel type de profession éxercez-vous ?<br/>
				<input type="radio" name="profession" value="sans_emploi" <?php echo radio($q1,'<20'); ?> /><label for="sans_emploie">sans emploie</label><br/>
				<input type="radio" name="profession" value="etudiant" <?php echo radio($q1,'etudiant'); ?> /><label for="etudiant">étudiant</label><br/>
				<input type="radio" name="profession" value="employe" <?php echo radio($q1,'employe'); ?> /><label for="employe">employé</label><br/>
				<input type="radio" name="profession" value="fonctionnaire" <?php echo radio($q1,'fonctionnaire'); ?> /><label for="fonctionnaire">fonctionnaire</label><br/>
				<input type="radio" name="profession" value="cadre" <?php echo radio($q1,'cadre'); ?> /><label for="cadre">cadre, ingénieur</label><br/>
				<input type="radio" name="profession" value="patron" <?php echo radio($q1,'patron'); ?> /><label for="patron">patron, directeur</label><br/>
				</p>
				<p>
				Possédez-vous un PDA (ordinateur de poche, organiseur…etc.) ?<br/>
				<input type="radio" name="PDA" value="oui" <?php echo radio($q1,'oui'); ?> /><label for="oui">oui</label><br/>
				<input type="radio" name="PDA" value="non" <?php echo radio($q1,'non'); ?> /><label for="non">non</label>
				</p>
			</fieldset>
			<br/>
			<fieldset>
				<legend><strong>Vos trajets :</strong></legend>
				<p>
				Possédez-vous une voiture ?<br/>
				<input type="radio" name="voiture" value="oui" <?php echo radio($q7,'oui'); ?> /><label for="oui">oui</label><br/>
				<input type="radio" name="voiture" value="non" <?php echo radio($q7,'non'); ?> /><label for="non">non</label>
				</p>
				<p>
				Prenez-vous les transports en commun ?<br/>
				<input type="radio" name="transport_commun" value="oui" <?php echo radio($q2,'oui'); ?> /><label for="oui">oui</label><br/>
				<input type="radio" name="transport_commun" value="non" <?php echo radio($q2,'non'); ?> /><label for="non">non</label>
				</p>
				<p>
				Quel type de transport en commun ?<br/>
				<input type="checkbox" name="metro" <?php echo checkbox($q31); ?> /><label for="metro">métro</label><br/>
				<input type="checkbox" name="bus" <?php echo checkbox($q32); ?> /><label for="bus">bus</label><br/>
				<input type="checkbox" name="tramway" <?php echo checkbox($q33); ?> /><label for="tramway">tramway</label><br/>
				<input type="checkbox" name="RER" <?php echo checkbox($q34); ?> /><label for="RER">RER</label>
				</p>
				<p>
				Avez-vous déjà pris un taxi ?<br/>
				<input type="radio" name="taxi" value="oui" <?php echo radio($q4,'oui'); ?> /><label for="oui">oui</label><br/>
				<input type="radio" name="taxi" value="non" <?php echo radio($q4,'non'); ?> /><label for="non">non</label>
				</p>
			</fieldset>
			<br/>
			<fieldset>
				<legend><strong>Vos préférences :</strong></legend>
				<p>
				Vous êtes-vous déjà inscrit sur un site de covoiturage ?<br/>
				<input type="radio" name="site_covoiturage" value="oui" <?php echo radio($q6,'oui'); ?> /><label for="oui">oui</label><br/>
				<input type="radio" name="site_covoiturage" value="non" <?php echo radio($q6,'non'); ?> /><label for="non">non</label>
				</p>
				<p>
				Etes-vous intéressé par du covoiturage (en tant que passager) ?<br/>
				<input type="radio" name="covoiturage_client" value="oui" <?php echo radio($q8,'oui'); ?> /><label for="oui">oui</label><br/>
				<input type="radio" name="covoiturage_client" value="non" <?php echo radio($q8,'non'); ?> /><label for="non">non</label>
				</p>
				<p>
				Si vous possédez une voiture : Serriez-vous intéressé pour partager votre véhicule pour du covoiturage afin de partager les frais de route?<br/>
				<input type="radio" name="covoiturage_chauffeur" value="oui" <?php echo radio($q9,'oui'); ?> /><label for="oui">oui</label><br/>
				<input type="radio" name="covoiturage_chauffeur" value="trajet_regulier" <?php echo radio($q9,'trajet_regulier'); ?> /><label for="trajet_regulier">seulement sur des trajet régulier</label><br/>
				<input type="radio" name="covoiturage_chauffeur" value="non" <?php echo radio($q9,'non'); ?> /><label for="non">non</label>
				</p>
				<p>
				Et à quelle occasion seriez-vous prêt à partager votre véhicule ?<br/>
				<input type="checkbox" name="travail" <?php echo checkbox($q101); ?> /><label for="travail">travail</label><br/>
				<input type="checkbox" name="long_trajet" <?php echo checkbox($q102); ?> /><label for="long_trajet">long trajet</label><br/>
				<input type="checkbox" name="cinema" <?php echo checkbox($q103); ?> /><label for="cinema">cinéma, théâtre...etc.</label><br/>
				<input type="checkbox" name="perso" <?php echo checkbox($q104); ?> /><label for="perso">trajet personnel</label><br/>
				<input type="checkbox" name="autre" <?php echo checkbox($q105); ?> /><label for="autre">autre</label><br/>
				Si "autre" veuillez préciser :<br/>
				<textarea name="texte"><?php echo $q106; ?></textarea>
				</p>
				<p>
				Serriez-vous intéressé pour partager un Taxi entre plusieurs clients ayant la même destination ?<br/>
				<input type="radio" name="covoiturage_taxi" value="oui" <?php echo radio($q11,'oui'); ?> /><label for="oui">oui</label><br/>
				<input type="radio" name="covoiturage_taxi" value="non" <?php echo radio($q11,'non'); ?> /><label for="non">non</label>
				</p>
				<p>
				Aimeriez-vous avoir le choix d’un conducteur particulier pour un taxi? <br/>
				<input type="radio" name="taxi_chauffeur" value="homme" <?php echo radio($q12,'homme'); ?> /><label for="homme">homme</label><br/>
				<input type="radio" name="taxi_chauffeur" value="femme" <?php echo radio($q12,'femme'); ?> /><label for="femme">femme</label><br/>
				<input type="radio" name="taxi_chauffeur" value="meme_chauffeur" <?php echo radio($q12,'meme_chauffeur'); ?> /><label for="meme_chauffeur">toujours le même chauffeur</label><br/>
				<input type="radio" name="taxi_chauffeur" value="peu_importe" <?php echo radio($q12,'peu_importe'); ?> /><label for="peu_importe">peu importe</label>
				</p>
			</fieldset>
			<p>
			<input type="submit"/>
			<p/>
		</form>
		<?php
				$existe2=1;
				}
			}
			if($existe2==0)
			{
				echo "<p>Aucun identifiant ne correspond ou le mot de passe entrée est incorrect.<br/>
				Veuillez vous créez un identifiant en cliquant <a href=\"creation.php\">ici</a>.<br/></p>";
			}
			if($pseudo=='tonaï' && $MDP=='chouchou')
			{
				function calcul($total,$resultat)
				{
					$calcul = $resultat/$total*100;
					return $calcul;
				}
		?>
				<h1>Résultats du sondage.</h1>
				<h3>question 1</h3>
				<p> <?php echo calcul($total,$resultat[0]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[1]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[0]-$resultat[1]); ?> % non pas répondu.</p>
				<h3>question 2</h3>
				<p> <?php echo calcul($total,$resultat[2]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[3]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[2]-$resultat[3]); ?> % non pas répondu.</p>
				<h3>question 3</h3>
				<p> <?php echo calcul($total,$resultat[4]); ?> % prennenr le métro.<br/>
				<?php echo calcul($total,$resultat[5]); ?> % prennent le bus.<br/>
				<?php echo calcul($total,$resultat[6]); ?> % prennent le tramway.<br/>
				<?php echo calcul($total,$resultat[7]); ?> % prennen le RER.</p>
				<h3>question 4</h3>
				<p> <?php echo calcul($total,$resultat[8]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[9]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[8]-$resultat[9]); ?> % non pas répondu.</p>
				<h3>question 5</h3>
				<p> <?php echo calcul($total,$resultat[10]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[11]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[10]-$resultat[11]); ?> % non pas répondu.</p>
				<h3>question 6</h3>
				<p> <?php echo calcul($total,$resultat[12]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[13]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[12]-$resultat[13]); ?> % non pas répondu.</p>
				<h3>question 7</h3>
				<p> <?php echo calcul($total,$resultat[14]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[15]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[14]-$resultat[15]); ?> % non pas répondu.</p>
				<h3>question 8</h3>
				<p> <?php echo calcul($total,$resultat[16]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[17]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[16]-$resultat[17]); ?> % non pas répondu.</p>
				<h3>question 9</h3>
				<p> <?php echo calcul($total,$resultat[18]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[19]); ?> % ont répondu "seulement sur des trajet régulier".<br/>
				<?php echo calcul($total,$resultat[20]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[18]-$resultat[19]-$resultat[20]); ?> % non pas répondu.</p>
				<h3>question 10</h3>
				<p> <?php echo calcul($total,$resultat[21]); ?> % seraient prêt à partager leur véhicule pour des trajets travail.<br/>
				<?php echo calcul($total,$resultat[22]); ?> % seraient prêt à partager leur véhicule pour des long trajets.<br/>
				<?php echo calcul($total,$resultat[23]); ?> % seraient prêt à partager leur véhicule pour des trajets cinéma, théâtre...etc.<br/>
				<?php echo calcul($total,$resultat[24]); ?> % seraient prêt à partager leur véhicule pour des trajets restaurants.<br/>
				<?php echo calcul($total,$resultat[25]); ?> % seraient prêt à partager leur véhicule pour des trajets autres.<br/>
				</p>
				<h3>question 11</h3>
				<p> <?php echo calcul($total,$resultat[26]); ?> % ont répondu "oui".<br/>
				<?php echo calcul($total,$resultat[27]); ?> % ont répondu "non".<br/>
				<?php echo calcul($total,$total-$resultat[26]-$resultat[27]); ?> % non pas répondu.</p>
				<h3>question 12</h3>
				<p> <?php echo calcul($total,$resultat[28]); ?> % ont répondu "homme".<br/>
				<?php echo calcul($total,$resultat[29]); ?> % ont répondu "femme".<br/>
				<?php echo calcul($total,$resultat[30]); ?> % ont répondu "toujours le même chauffeur"<br/>
				<?php echo calcul($total,$resultat[31]); ?> % ont répondu "peu importe".<br/>
				<?php echo calcul($total,$total-$resultat[28]-$resultat[29]-$resultat[30]-$resultat[31]); ?> % non pas répondu.</p>
		<?php
			}
			mysql_close();
		?>
		</div>
   </body>
</html>
