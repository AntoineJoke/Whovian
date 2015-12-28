<?php


require_once ($rootDirectory.'/metier/Personnage.php');

class PersonnageView {
    
    public static function getHtmlCompact($personnage){
        $a=$personnage->getNumDocteur();
        $a="$a (".$personnage->getActeur().")";
        return $a;
    }
    
}

?>
