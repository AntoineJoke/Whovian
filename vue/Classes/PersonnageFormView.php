<?php


class PersonnageFormView {

	public static function getDefaultFormHTML($action){
		return self::getFormHtml($action,Personnage::getDefaultPersonnage( )) ;
	}


 	public static function getFormHtml ($action,$personnage) {
 		$htmlCode = FormManager ::beginForm("post", $action ) ;
                        $htmlCode.=FormManager::addHiddenInput("id", "id",html_entity_decode($personnage->getId(),ENT_QUOTES,"UTF-8" ));
 			$htmlCode.= FormManager ::addTextInput ( "Numéro Docteur" , "numDocteur" , "numDocteur" , "8" ,html_entity_decode($personnage->getNumDocteur(),ENT_QUOTES,"UTF-8" ))."<br/>";
 			$htmlCode.= FormManager ::addTextInput("Annee Debut" , "anneeDebut" , "anneeFin" , "4" ,html_entity_decode($personnage->getAnneeDebut() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode.= FormManager ::addTextInput("Annee Fin" , "anneeFin" , "anneeFin" , "4" ,html_entity_decode($personnage->getAnneeFin() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode.= FormManager ::addTextInput("Acteur" , "acteur" , "acteur" , "50" ,html_entity_decode($personnage->getActeur() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode.= FormManager ::addTextInput("Expression Favorite" , "expFav" , "expFav" , "30" ,html_entity_decode($personnage->getExpFav() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode.= FormManager ::addTextInput("Decription" , "descri" , "descri" , "30" ,html_entity_decode($personnage->getDescri() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode.= FormManager ::addHiddenInput( "urlImage" , "urlImage"  ,html_entity_decode($personnage->getUrlImage() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode .= FormManager ::addSubmitButton("Envoyer" , "class =\"sansLabel \"")."<br/>";
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


 	public static function getFormErrorsHtml ($action , $personnage , &$dataErrors ){

 		$htmlCode = FormManager ::beginForm("post",$action) ;
			$htmlCode .=self ::addErrorMsg($dataErrors, "numDocteur");
			$htmlCode .= FormManager ::addTextInput ( "NumDocteur" , "numDocteur" , "numDocteur" , "8" ,html_entity_decode($personnage->getNumDocteur(), ENT_QUOTES,"UTF-8" ) )."<br/>";
			$htmlCode .=self ::addErrorMsg($dataErrors, "anneeDebut");
 			$htmlCode.= FormManager ::addTextInput("Annee Debut" , "anneeDebut" , "anneeFin" , "4" ,html_entity_decode($personnage->getAnneeDebut() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode .=self ::addErrorMsg($dataErrors, "anneeFin");
 			$htmlCode.= FormManager ::addTextInput("Annee Fin" , "anneeFin" , "anneeFin" , "4" ,html_entity_decode($personnage->getAnneeFin() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode .=self ::addErrorMsg($dataErrors, "acteur");
 			$htmlCode.= FormManager ::addTextInput("Acteur" , "acteur" , "acteur" , "20" ,html_entity_decode($personnage->getActeur() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode .=self ::addErrorMsg($dataErrors, "expFav");
 			$htmlCode.= FormManager ::addTextInput("Expression Favorite" , "expFav" , "expFav" , "30" ,html_entity_decode($personnage->getExpFav() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode .=self ::addErrorMsg($dataErrors, "desc");
 			$htmlCode.= FormManager ::addTextInput("Description" , "desc" , "desc" , "50" ,html_entity_decode($personnage->getDescri() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;
 			$htmlCode .=self ::addErrorMsg($dataErrors, "urlImage");
 			$htmlCode.= FormManager ::addTextInput("Url Image" , "urlImage" , "urlImage" , "30" ,html_entity_decode($personnage->getUrlImage() , ENT_QUOTES, "UTF-8" ) ) . "<br/>" ;


			$htmlCode .= FormManager ::addSubmitButton("Envoyer","class=\"sansLabel\"")."<br/>";
		$htmlCode .= FormManager ::endForm();

		return $htmlCode ;
	}


	public static function getHiddenFormHtml($action,$personnage,$buttonText) {
		$htmlCode = FormManager ::beginForm ("post",$action) ;
			$htmlCode .= FormManager ::addHiddenInput ("numDocteur","numDocteur",html_entity_decode($personnage->getNumDocteur(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addHiddenInput ("anneeDebut","anneeDebut",html_entity_decode($personnage->getAnneeDebut(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addHiddenInput ("anneeFin","anneeFin",html_entity_decode($personnage->getAnneeFin(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addHiddenInput ("acteur","acteur",html_entity_decode($personnage->getActeur(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addHiddenInput ("expFav","expFav",html_entity_decode($personnage->getExpFav(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addHiddenInput ("desc","desc",html_entity_decode($personnage->getDescri(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addHiddenInput ("urlImage","urlImage",html_entity_decode($personnage->getUrlImage(),ENT_QUOTES,"UTF−8"));
			$htmlCode .= FormManager ::addSubmitButton($buttonText,"class=\"sansLabel\"");
		$htmlCode .= FormManager ::endForm();

 		return $htmlCode ;
	}

}
?>
