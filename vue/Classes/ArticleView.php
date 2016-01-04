<?php


require_once ($rootDirectory.'/metier/Personnage.php');

class ArticleView {
    
    public static function getHtmlCompact($article){
        $a=$article->getTitre();
        return $a;
    }

    public static function getHtmlDevelopped($article){
    	$a = "<h1>".$article->getTitre()."</h1>
		<img src=\"http://localhost/Whovian/ressources/images/articles/".$article->getUrlImage()."\" align=\"left\" border=\"5\" height=\"200\" margin=\"15\">
    	<p>".$article->getTexte()."</p>";

        return $a;
    }
    
}

?>
