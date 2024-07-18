<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class EquipeProjet extends module {
 
    function __construct(&$core) {
        parent::__construct($core);
    }
    
    public function displayPage() {
?>    
<h1>Equipe</h1>
<h2>Le projet "LOGIBOX"</h2>
<p>
	"LOGIBOX" est le nom d'un projet de l'Ecole Centrale de Lille.<br/>
	Il a été réalisé par un groupe de six élèves et possède comme partenaire le LAGIS.
</p>
<p>
	L'activité projet de l'Ecole Centrale de Lille permet de mettre les élèves dans une situation concrète de réalisation de projet en partenariat avec une entreprise extérieure ou un laboratoire de recherche. De ce fait les élèves vivent et apprennent le véritable métier d'ingénieur.
</p>
<p>
	Au début de l'année, les élèves forment donc des groupes d'environ six élèves, et se mettent alors à rechercher une innovation. Ils doivent ensuite rechercher un partenaire intéressé qui leur fournira le financement nécessaire pour développer le projet.
</p>
<p>
	Après validation de leur projet par l'école. Les élèves sont placées sous la responsabilité d'un Directeur Scientifique (DS) ainsi que d'un pilote qui les aiguilleront tout au long des 2 années constituants la durée du projet.
</p>
<p>
	La première année est alors plus spécialement axée sur les phases de recherche et de développement, pendant lesquelles est fixé le cahier des charges, tandis qu'en deuxième année commence alors concrètement la phase de réalisation du projet.
</p>
<?php
    }
}
?>