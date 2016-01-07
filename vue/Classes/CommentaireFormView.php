<?php

class CommentaireFormView {

public static function getDefaultFormHTML($action,$idArticle){
           $commentaire=Commentaire::getDefaultCommentaire();
           
           $commentaire->setIdArticle($idArticle);
		return self::getFormHtml($action,$commentaire) ;
	}


 	public static function getFormHtml ($action,$commentaire) {
 		$htmlCode=FormManager::beginForm("post", $action ) ;
 		$htmlCode.=FormManager::addHiddenInput("idArticle" , "idArticle" , html_entity_decode($commentaire->getIdArticle() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 		$htmlCode.=FormManager::addTextInput("Login" , "login" , "login" , "50" ,html_entity_decode($commentaire->getLogin() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 		$htmlCode.=FormManager::addTextAreaInput("Texte" , "texte" , "texte" , "5" , "100", html_entity_decode($commentaire->getTexte() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 		$htmlCode.=FormManager::addSubmitButton("Envoyer" , "class =\"sansLabel \"")."<br/>";
 		$htmlCode.=FormManager::endForm();

		return $htmlCode ;
 	}
}
?>
