<?php
require_once(dirname(__FILE__)."/Article.php");

class ArticleFabrique{ 

	public static function getArticle(&$dataErrors, $id=null, $titre=null, $urlImage=null, $texte=null){ 
		$article=Article::getDefaultArticle();
		$dataErrors=array();
		
		try{ 
			$article->setId($id);
		}catch (Exception $e){ 
			$dataErrors['id']=$e->getMessage()."<br/>\n";

		}

		try{
			$article->setTitre($titre);
		}catch (Exception $e){ 
			$dataErrors['titre']=$e->getMessage()."<br/>\n";
			
		}

		try{
			$article->setUrlImage($urlImage);
		}catch (Exception $e){ 
			$dataErrors['urlImage']=$e->getMessage()."<br/>\n";
			
		}

		try{
			$article->setTexte($texte);
		}catch (Exception $e){ 
			$dataErrors['texte']=$e->getMessage()."<br/>\n";
			
		}
		return $article;
	}

}

?>