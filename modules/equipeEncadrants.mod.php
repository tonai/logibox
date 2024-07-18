<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class EquipeEncadrants extends module {
 
    function __construct(&$core) {
        parent::__construct($core);
    }
    
    public function displayPage() {
?>    
<h1>Equipe</h1>
<h2>L'équipe encadrante du projet "LOGIBOX"</h2>
<p>
	Tous les projets de l'Ecole Centrale de Lille sont encadrés par des professeurs de l'école.<br/>
	On retrouve toujours, pour chaque projet :
</p>
<ol>
	<li>Un directeur Scientifique.</li>
	<li>Un pilote</li>
	<li>Un conseiller d'analyse multidimensionnelle.</li>
</ol>
<p>
	Ainsi le projet "LOGIBOX" ne déroge pas à la règle et possède ses propres encadrants :
</p>
<dl>
	<dt>
			Directeur scientifique :
	</dt>
	<dd>
			M. HAMMADI Slim
	</dd>
</dl>
<dl>
	<dt>
			Pilote :
	</dt>
	<dd>
			M. TRICOT Jean-Claude 
	</dd>
</dl>
<dl>
	<dt>
			Conseiller d'analyse multidimensionnelle :
	</dt>
	<dd>
			M. BAUSSARD Jacques 
	</dd>
</dl>
<?php
    }
}
?>