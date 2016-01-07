<?php
require_once(dirname(__FILE__)."/Commentaire.php");

class CommentaireFabrique{ 

	public static function getCommentaire(&$dataErrors, $idCom=null, $idArticle=null, $login=null, $texte=null){ 
		$commentaire=Commentaire::getDefaultCommentaire();
		$dataErrors=array();
		
		try{ 
			$commentaire->setIdCom($idCom);
		}catch (Exception $e){ 
			$dataErrors['idCom']=$e->getMessage()."<br/>\n";

		}

		try{
			$commentaire->setIdArticle($idArticle);
		}catch (Exception $e){ 
			$dataErrors['idArticle']=$e->getMessage()."<br/>\n";
			
		}

		try{
			$commentaire->setLogin($login);
		}catch (Exception $e){ 
			$dataErrors['login']=$e->getMessage()."<br/>\n";
			
		}

		try{
			$commentaire->setTexte($texte);
		}catch (Exception $e){ 
			$dataErrors['texte']=$e->getMessage()."<br/>\n";
			
		}
		return $commentaire;
	}

}

?>

