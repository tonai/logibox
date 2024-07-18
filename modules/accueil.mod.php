<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class Accueil extends module {
 
    function __construct(&$core) {
        parent::__construct($core);
    }
    
    public function displayPage() {
?>    
<h1>Accueil</h1>
<h2>Bienvenue sur le Portail du projet "LOGIBOX".</h2>
<p>
    Ce portail est dédié au covoiturage, cependant il diffère grandement des autres sites proposant des services de covoiturage, car il s'agit en effet ici de vous proposez un covoiturage tout à fait nouveau : Le covoiturage en TEMPS REEL.
</p>
<p>
	Le covoiturage en temps réel vous permettra grâce à votre PDA de vous connectez depuis n'importe où et de rechercher "en live" des solutions de covoiturage correspondant à vos critères. Par exemple :<br/>
	Il est tout à fait possible que pour vous rendre à votre travail vous empruntiez exactement la même route que certains de vos collègues sans vous en rendre compte.<br/>
	Alors pourquoi ne pas faire le trajet ensemble?<br/>
	Cela vous permettra de faire des économies, mais vous économiserez également notre planète.
</p>
<p>
	Le portail LOGIBOX à pour mission de regrouper les membres dans une véritable communauté, mais il permet surtout de se faire rencontrer des membres ayant le même itinéraire, mais qui s'ignoraient totalement.
</p>
<?php
    }
}
?>