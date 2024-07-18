<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class EquipePartenaire extends module {
 
    function __construct(&$core) {
        parent::__construct($core);
    }
    
    public function displayPage() {
?>    
<h1>Equipe</h1>
<h2>Le partenaire de projet "LOGIBOX"</h2>
<p>
	Le projet "LOGIBOX" est réalisé en partenariat avec le Laboratoire d'Automatique, Génie Informatique et Signal (LAGIS).
</p>
<p>
	<img src="photos/lagis.png" alt="LAGIS" id="float"/><br/><br/>
	Le LAGIS est une unité mixte de recherche du Centre National de la Recherche Scientifique (CNRS), rattaché au département, Sciences et technologies de l'information et de l'ingénierie (ST2I). Les tutelles locales du laboratoire sont l'Ecole Centrale de Lille et l'Université des Sciences et Technologies de Lille.
</p>
<p>
	Le LAGIS est implanté à l'Ecole Centrale de Lille et à l'Université des Sciences et Technologies de Lille, sur le campus universitaire scientifique de Villeneuve d'Ascq, près des stations de métro "Cité Scientifique" et "4 Cantons".
</p>
<p>
	Les thématiques de recherche du laboratoire relèvent de l'Automatique du Génie Informatique du Signal et de L'image. Elles sont développées au sein de 6 équipes de recherche, de 3 opérations transversales et les principaux domaines d'application couvrent l'Ingénierie pour la santé, les Transports et logistique ; Sécurité active dans les transports et les systèmes de production.
</p>
<p>
	Vous pouvez visitez le site du LAGIS en suivant <a href="http://lagis.ec-lille.fr">ce lien</a>.
</p>
<?php
    }
}
?>