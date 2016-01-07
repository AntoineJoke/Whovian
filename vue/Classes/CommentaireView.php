<?php

require_once ($rootDirectory.'/metier/Commentaire.php');

class CommentaireView {

    public static function getHtmlDevelopped($commentaire){
	if($commentaire->getLogin()!=" "){
            $a = "<p> ".$commentaire->getLogin()." : </p>";
    	}
        else{
            $a="<p> Anonyme : </p>";
        }
        $a = "$a <p>".$commentaire->getTexte()."</p>";

        return $a;
    }
    
}

?>
