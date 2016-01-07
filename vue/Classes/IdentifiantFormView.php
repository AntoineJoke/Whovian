<?php


class IdentifiantFormView {

	public static function getDefaultFormHTML($action){
		return self::getFormHtml($action,Identifiant::getDefaultIdentifiant( )) ;
	}


 	public static function getFormHtml ($action,$identifiant) {
 		$htmlCode = FormManager ::beginForm("post", $action )."<br/>" ;
 			$htmlCode .= FormManager ::addTextInput ( "Login" , "login" , "login" , "8" ,html_entity_decode($identifiant->getLogin(), ENT_QUOTES,"UTF-8" ) ). "  ";
 			$htmlCode.= FormManager ::addPasswordInput("Mot De Passe" , "mdp" , "mdp" , "10" ,html_entity_decode($identifiant->getMdp() , ENT_QUOTES, "UTF-8" ) ) . "  " ;
 			$htmlCode .= FormManager ::addSubmitButton("Envoyer" , "class =\"sansLabel \"");
 		$htmlCode .= FormManager ::endForm();

		return $htmlCode ;
 	}


 	private static function addErrorMsg ($dataErrors, $fieldName) {
            $htmlCode="";
		if(!empty($dataErrors[$fieldName])){
 			$htmlCode .="<span class=\"errorMsg\">".$dataErrors[$fieldName]."</span><br/>" ;
 		}
 		return $htmlCode ;
 	}


 	public static function getFormErrorsHtml ($action , $identifiant , $dataErrors ){
		
 		$htmlCode = FormManager ::beginForm("post",$action) ;
			$htmlCode .=self ::addErrorMsg($dataErrors, "login");
			$htmlCode .=FormManager ::addTextInput("Login","login","login","8",html_entity_decode($identifiant->getLogin( ),ENT_QUOTES, "UTF-8"))."<br/>";
			$htmlCode .=self ::addErrorMsg ( $dataErrors , "mdp" ) ;
			$htmlCode .=FormManager ::addPasswordInput ( "Mot de Passe","mdp","mdp","10" ,html_entity_decode ( $identifiant->getMdp( ),ENT_QUOTES,"UTF-8"))."<br/>";


			$htmlCode .= FormManager ::addSubmitButton("Envoyer","class=\"sansLabel\"")."<br/>";
		$htmlCode .= FormManager ::endForm();

		return $htmlCode ;
	}


	public static function getHiddenFormHtml($action,$identifiant,$buttonText) {
		$htmlCode = FormManager ::beginForm ("post",$action) ;
			$htmlCode .= FormManager ::addHiddenInput ("login","login",html_entity_decode($identifiant->getLogin(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addHiddenInput ("mdp","mdp",html_entity_decode($identifiant->getMdp(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addSubmitButton($buttonText,"class=\"sansLabel\"");
		$htmlCode .= FormManager ::endForm();

 		return $htmlCode ;
	}

}
?>
