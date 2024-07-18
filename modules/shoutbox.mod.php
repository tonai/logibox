<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class shoutbox extends module {
	function __construct(&$core) {
		parent::__construct($core);
	}

    public function action($action){
        switch($action) {
            case 'add':
                if(isset($_POST['titre']) and isset($_POST['message'])) {
                    if($_POST['titre']!='' and $_POST['message']!='') {
                        //echo '<p id="erreur">Votre message à bien été enregistré</p>';dans dsiplayPage
                        $titre=$_POST['titre'];
                        $titre=htmlspecialchars(nl2br($titre));
                        $message=$_POST['message'];
                        $message=htmlspecialchars(nl2br($message));
                        $date=date("d/m/Y H:i:s");
                        $this->db->exec("INSERT INTO shoutbox(pseudo,titre,message,date) VALUES('$pseudo','$titre','$message','$date')");
                        $this->tools->redirection('index.php?module=shoutbox&action=add');
                    }
                    else {
                        //echo "<p id=\"erreur\">Votre message n'est pas valide</p>";doit etre gerer dans le 
                    }
                }
                break;
            default:
                break;
        }
    }
    
    public function displayDiv(){
?>
		<h2>Messages Express</h2>
		<p>
			<a class="bold" href="?module=shoutbox&amp;action=add">Ecrire un message</a><br/>
			<a class="bold" href="?module=shoutbox&amp;action=read">Voir tous les messages</a>
		</p>
		<hr/>
<?php
        foreach($this->db->query('SELECT id, pseudo, titre FROM shoutbox ORDER BY id DESC LIMIT 0,5') as $buff) {
            $titre=$buff['titre'];
            echo "\n<dl>";
            echo "\n\t<dt>";
            echo "-- ".$buff['pseudo']." --";
            echo "\n\t</dt>";
            echo "\n\t<dd id=\"message_shoutbox\"><a href=\"?module=shoutbox&action=".$buff['id']."\">";
            if(strlen($titre)>120) {
                $titre=substr($titre, 0, 117).'...';
            }	
            echo $buff['titre'];
            echo "</a>";
            echo "\n\t</dd>";
            echo "\n</dl>";
            echo "\n<hr/>";
        } 
    }
	
    public function displayPage(){
        if($_GET['display']=='rss') {
            $this->afficheMessageRss();
        }
        else {
            switch($_GET['action']) {
                case "read":
?>
				<h1>Messages Express</h1>
				<h2>Voir tout les messages</h2> 
<?php
                    $count=$this->db->query('SELECT COUNT(id) FROM shoutbox')->fetch();
                    $donnees=$count['0'];
                    if (!isset($_GET['page'])) {
                        $message=0;
                        $page_actuelle=1;
                    }
                    else {
                        $message=10*($_GET['page']-1);
                        $page_actuelle=$_GET['page'];
                    }
                    $pages_totale=ceil(($donnees[0])/10);
                    $pages=$pages_totale;
                    echo '<p class="page">';
                    if ($page_actuelle!=1) {
                            $page_prec=$page_actuelle-1;
                            echo "\n\t<a href=\"?module=shoutbox&amp;action=read&amp;page=".$page_prec."\">page précedante</a>&nbsp&nbsp;";
                    }
                    echo "\n\t<a href=\"?module=shoutbox&amp;action=read&amp;page=1\">page 1</a>&nbsp&nbsp;";
                    $i=2;
                    if ($page_actuelle<=5) {
                        $i=2;
                        if ($pages>9) $pages=9;
                    }
                    elseif ($page_actuelle>=($pages_totale-4) and $page_actuelle>5) {
                        if ($pages_totales>=6) $i=$pages_totale-7;
                    }
                    else {
                        $i=$page_actuelle-3;
                        $pages=$page_actuelle+3;
                    }
                    for ($i;$i<$pages;$i++) {
                            echo "\n\t<a href=\"?module=shoutbox&amp;action=read&amp;page=".$i."\">page ".$i."</a>&nbsp&nbsp;";
                    }
                    echo "\n\t<a href=\"?module=shoutbox&amp;action=read&amp;page=".$pages_totale."\">page ".$pages_totale."</a>&nbsp&nbsp;";
                    if ($page_actuelle!=$pages_totale) {
                        $page_suiv=$page_actuelle+1;
                        echo "\n\t<a href=\"?module=shoutbox&amp;action=read&amp;page=".$page_suiv."\">page suivante</a>";
                    }
                    echo "\n<p/>";
                    echo "\n<br/>";
                    $this->afficheMessage($message,10);
                    break;
                case "add":
?>
				<h1>Messages Express</h1>
				<h2>Ecrire un message</h2>
				<p>
					Pour faciliter la compréhension de chacun, merci de bien vouloir choisir un titre court mais clair contenant au moins les destinations de départ et d'arrivées ainsi que la date. Vous pouvez par exemple utilisez les modèles suivants :<br/>
					[recherche] Lille cité scientifique - Lille V2 - 30/08/2008.<br/>
					[propose] Paris - Nantes - 19/08/2008.
				</p>
				<form method="post" action="?module=shoutbox&action=add">
					<fieldset>
						<legend><strong>Votre message :</strong></legend>
						<p>
							<label for="titre">Titre : </label>
							<input type="text" name="titre" id="titre" size="80" value="<?php if(isset($_POST['titre'])) echo $_POST['titre'];	?>"/>
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
                    break;
                default:
                    echo "<h1>Messages Express</h1>";
                        $id=$_GET['action'];
                        $id=(int)$id;
                        //$count=$this->db->query('SELECT COUNT(id) FROM shoutbox')->fetch();
                        //$max=$count['0'];
                        //echo $max;
                        if (is_integer($id)) {
                            if(/*$id<=$max*/1) {
                                $donnees=$this->db->query('SELECT * FROM shoutbox WHERE id='.$id)->fetch();
                                $message=$donnees['message'];
                                $pseudo=$donnees['pseudo'];
                                echo "\n<h2>Message écrit par ".$pseudo."</h2>";
                                echo "\n<p>".$message."</p>";
                            }
                        }
                    break;
            }
        }
    }
        
	private function afficheMessage($debut,$nb_message){
		foreach($this->db->query('SELECT id, pseudo, titre FROM shoutbox ORDER BY id DESC LIMIT '.$debut.','.$nb_message) as $buff) {
			echo "\n<dl>";
			echo "\n\t<dt>";
			echo $buff['pseudo'];
			echo "</dt>";
			echo "\n\t<dd id=\"message_shoutbox\">";
			echo "\n\t\t<a href=\"index.php?module=shoutbox&action=".$buff['id']."\">";
			echo $buff['titre'];
			echo "</a>";
			echo "\n\t</dd>";
			echo "\n</dl>";
			echo "\n<hr/>";
		}
	}
	
	private function afficheMessageRss() {
?>
    <channel>
        <title>[Logibox] Liste des covoiturages</title>
        <link>http://tuxp.vinci.ec-lille.fr</link>
        <description>Groupe projet de l'EC-Lille</description>
<?php
            foreach ($this->db->query('SELECT * FROM `shoutbox` ORDER BY `date`') as $buff) {
                echo '<item>';
                echo '<title>'.$buff['titre'].' (par '.$buff["pseudo"].')</title>';
                echo '<link>http://logibox.ec-lille.fr</link>';
                echo '<pubDate>'.$buff['date'].'</pubDate>';
                echo '<description>'.$buff['message'].'</description>';
                echo '</item>';
            }
	echo "</channel>";
    }
}
?>