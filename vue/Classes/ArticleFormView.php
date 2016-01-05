<?php


class ArticleFormView {

	public static function getDefaultFormHTML($action){
		return self::getFormHtml($action,Article::getDefaultArticle( )) ;
	}


 	public static function getFormHtml ($action,$article) {
 		$htmlCode = FormManager ::beginForm("post", $action ) ;
 		$htmlCode .= FormManager ::addTextInput ( "Id" , "id" , "id" , "4" ,html_entity_decode($article->getId(), ENT_QUOTES,"UTF-8" ) )."<br/>";
 		$htmlCode.= FormManager ::addTextInput("Titre" , "titre" , "titre" , "50" ,html_entity_decode($article->getTitre() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 		$htmlCode.= FormManager ::addTextInput("UrlImage" , "urlImage" , "urlImage" , "50" ,html_entity_decode($article->getUrlImage() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 		$htmlCode.= FormManager ::addTextAreaInput("Texte" , "Texte" , "texte" , "5" , "100", html_entity_decode($article->getTexte() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 		$htmlCode .= FormManager ::addSubmitButton("Envoyer" , "class =\"sansLabel \"")."<br/>";
 		$htmlCode .= FormManager ::endForm();

		return $htmlCode ;
 	}


 	private static function addErrorMsg ($dataErrors, $fieldName) {
 		$htmlCode = "";
		if(!empty($dataErrors[$fieldName])){
 			$htmlCode .="<span class=\"errorMsg\">".$dataErrors[$fieldName]."</span><br/>" ;
 		}
 		return $htmlCode ;
 	}


 	public static function getFormErrorsHtml ($action , $article , &$dataErrors ){

 		$htmlCode = FormManager ::beginForm("post",$action) ;
		$htmlCode .=self ::addErrorMsg($dataErrors, "id");
		$htmlCode .= FormManager ::addTextInput ( "Id" , "id" , "id" , "4" ,html_entity_decode($article->getId(), ENT_QUOTES,"UTF-8" ) )."<br/>";
		$htmlCode .=self ::addErrorMsg($dataErrors, "titre");
 		$htmlCode.= FormManager ::addTextInput("Titre" , "titre" , "titre" , "50" ,html_entity_decode($article->getTitre() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 		$htmlCode .=self ::addErrorMsg($dataErrors, "urlImage");
 		$htmlCode.= FormManager ::addTextInput("UrlImage" , "urlImage" , "urlImage" , "50" ,html_entity_decode($article->getUrlImage() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 		$htmlCode .=self ::addErrorMsg($dataErrors, "texte");
 		$htmlCode.= FormManager ::addTextAreaInput("Texte" , "texte" , "texte" , "5" , "100",html_entity_decode($article->getTexte() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;

		$htmlCode .= FormManager ::addSubmitButton("Envoyer","class=\"sansLabel\"")."<br/>";
		$htmlCode .= FormManager ::endForm();

		return $htmlCode ;
	}


	public static function getHiddenFormHtml($action,$article,$buttonText) {
		$htmlCode = FormManager ::beginForm ("post",$action) ;
		$htmlCode .= FormManager ::addHiddenInput ("id","id",html_entity_decode($article->getId(),ENT_QUOTES,"UTF-8"));
		$htmlCode .= FormManager ::addHiddenInput ("titre","titre",html_entity_decode($article->getTitre(),ENT_QUOTES,"UTF-8"));
		$htmlCode .= FormManager ::addHiddenInput ("urlImage","urlImage",html_entity_decode($article->getUrlImage(),ENT_QUOTES,"UTF-8"));
		$htmlCode .= FormManager ::addHiddenInput ("texte","texte",html_entity_decode($article->getTexte(),ENT_QUOTES,"UTF-8"));
		$htmlCode .= FormManager ::addSubmitButton($buttonText,"class=\"sansLabel\"");
		$htmlCode .= FormManager ::endForm();

 		return $htmlCode ;
	}

}
?>
