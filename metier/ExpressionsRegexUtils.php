<?php
/////////////////////////////////////////////////////////////////
// Expressions rÃ©guliÃ¨res utiles.
class ExpressionsRegexUtils{

   /**
    * @brief : expression rÃ©guliÃ¨re pour la langue FranÃ§aise avec accents
    * @warning La chaÃ®ne doit Ãªtre Ã©chappÃ©e par htmlentities
    */
	private static function getRegexFrLang(){
		return '/^([a-zA-Z]'
				.'|(\&[a-zA-Z]grave\;)|(\&[a-zA-Z]acute\;)|(\&[a-zA-Z]circ\;)|(\&[a-zA-Z]uml\;)'
				.'|(\&[a-zA-Z]cedil\;)|(\&[a-zA-Z][a-zA-Z]lig\;)|(\&szlig\;)|(\&[a-zA-Z]tilde\;)'
				.'|(\-)|( )|(\&amp\;\#39\;)|(\&\#039\;)|(\&amp\;\#34\;)|(\&\#034\;)|(\&quot\;)|(\.))*$/';
	}

  /**
    * @brief : expression rÃ©guliÃ¨re pour la langue FranÃ§aise avec accents et chiffres
    * @warning La chaÃ®ne doit Ãªtre Ã©chappÃ©e par htmlentities
    */
	private static function getRegexFrLangWithNumbers(){
	 return '/^([a-zA-Z0-9]'
				.'|(\&[a-zA-Z]grave\;)|(\&[a-zA-Z]acute\;)|(\&[a-zA-Z]circ\;)|(\&[a-zA-Z]uml\;)'
				.'|(\&[a-zA-Z]cedil\;)|(\&[a-zA-Z][a-zA-Z]lig\;)|(\&szlig\;)|(\&[a-zA-Z]tilde\;)'
				.'|(\-)|( )|(\!)|(\?)|(\&\#232\;)|(\,)|(\&amp\;\#39\;)|(\&\#039\;)|(\&\#130\;)|(\')|(\&egrave\;)|(\&amp\;\#34\;)|(\&\#034\;)|(\&quot\;)|(\.))*$/';
	}

   /**
    * @brief : Test expression rÃ©guliÃ¨re pour la langue FranÃ§aise avec accents
    * avec conditions de longueur (par exemple pour un champ obligatoire)
    */
	public static function isValidRegexFrLang($chaine, $minLenth, $maxLenth){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenth && strlen($chaine) <= $maxLenth
				&& preg_match(self::getRegexFrLang(), $chaine));				
	}

  /**
    * @brief : Test expression rÃ©guliÃ¨re pour la langue FranÃ§aise avec accents et chiffres
    * avec conditions de longueur (par exemple pour un champ obligatoire)
    */
	public static function isValidRegexFrLangWithNumbers($chaine, $minLenth, $maxLenth){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenth && strlen($chaine) <= $maxLenth
				&& preg_match(self::getRegexFrLangWithNumbers(), $chaine));				
	}

  /**
    * @brief : Test expression rÃ©guliÃ¨re passÃ©e en paramÃ¨tre
    * avec conditions de longueur (par exemple pour un champ obligatoire)
    */
	public static function isValidString($chaine, $regExp, $minLenth, $maxLenth){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenth && strlen($chaine) <= $maxLenth
				&& preg_match($regExp, $chaine));				
	}
}
?>