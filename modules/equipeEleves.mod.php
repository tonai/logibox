<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class EquipeEleves extends module {
 
    function __construct(&$core) {
        parent::__construct($core);
    }
    
    public function displayPage() {
?>    
            <h1>Equipe</h1>
<h2>Les élèves réalisateurs du projet</h2>
<p>
	Le projet "LOGIBOX" a été réalisé par un groupe de six élèves de l'Ecole Centrale de Lille.
</p>
<p>
	Par ordre alphabétique :
</p>
<p>
	<img src="photos/cabaye.jpg" alt="CABAYE Tony" />
	CABAYE Tony
<hr/>
	<img src="photos/chevallier.pg" alt="CHEVALLIER Sébastien" />
	CHEVALLIER Sébastien
<hr/>
	<img src="photos/delville.jpg" alt="DELVILLE Benoit" />
	DELVILLE Benoit
<hr/>
	<img src="photos/gendronneau.jpg" alt="GENDRONNEAU Maxime" />
	GENDRONNEAU Maxime
<hr/>
	<img src="photos/louis.jpg" alt="LOUIS Charles Adrien" />
	LOUIS Charles Adrien
<hr/>
	<img src="photos/remy.jpg" alt="REMY Sébastien" />
	REMY Sébastien
<hr/>
</p>
<?php
    }
}
?>