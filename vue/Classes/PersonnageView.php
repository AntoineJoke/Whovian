<?php


require_once ($rootDirectory.'/metier/Personnage.php');

class PersonnageView {
    
    public static function getHtmlCompact($personnage){
        $a=$personnage->getNumDocteur();
        $a="$a (".$personnage->getActeur().")";
        return $a;
    }

    public static function getHtmlDevelopped($personnage){
    	$a = "<h1>".$personnage->getNumDocteur()."</h1>
		<img src=\"http://localhost/Whovian/ressources/images/docteurs/".$personnage->getUrlImage()."\" alt=\"Pas d'image disponible pour ce docteur.\" align=\"left\" border=\"5\" height=\"200\" margin=\"15\">
    	<p>Ce docteur apparait de ".$personnage->getAnneeDebut()." à ".$personnage->getAnneeFin().".</p>
    	<p>Il est interprété par ".$personnage->getActeur().".</p>
    	<p>Expression favorite : \"".$personnage->getExpFav()."\"</p>
    	<p>".$personnage->getDescri()."</p>";

        return $a;
    }
    
}

?>
