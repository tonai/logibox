<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class EquipeEcole extends module {
 
    function __construct(&$core) {
        parent::__construct($core);
    }
    
    public function displayPage() {
?>    
<h1>Equipe</h1>
<h2>L'Ecole Centrale de Lille</h2>
<p>
	<img src="photos/ecole.png" alt="Ecole Centrale de Lille" id="float"/><br/><br/>
	Au coeur de la métropole lilloise dynamique et chaleureuse, au carrefour des axes européens (Paris, Londres, Bruxelles), l'Ecole Centrale de Lille allie les compétences scientifiques et techniques aux qualités humaines, qui feront de nos élèves les futurs acteurs du développement économique des entreprises.
</p>
<hr/>
<p>
	L'Ecole Centrale de Lille est situé sur le campus de Lille 1 à côté de la station de métro "4 cantons".<br/>
	C'est une école d'ingénieur diplômant chaque année près de 280 ingénieurs de haut niveau qui rejoignent l'encadrement de nombreuses entreprises.<br/>
	L'éventail des relations existant entre l'Ecole Centrale de Lille et les entreprises est toutefois bien plus étendu que la seule insertion professionnelle des Centraliens de Lille.
</p>
<p>
	Vous pouvez visitez le site de l'Ecole Centrale de Lille en suivant <a href="http://www.ec-lille.fr">ce lien</a>.
</p>
<?php
    }
}
?>