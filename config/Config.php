<?php
class Config
{
	public static function getVues(){
		global $rootDirectory;
		$vueDirectory = $rootDirectory."vue/";
		return array("default" => $vueDirectory."vueAccueil.php","saisiePersonnage" => $vueDirectory."vueSaisiePersonnage.php", "editionPersonnage" => $vueDirectory."vueEditionPersonnage.php", "affichePersonnage" => $vueDirectory."vueAffichePersonnage.php","afficheCollectionPersonnage" => $vueDirectory."vueCollectionPersonnage.php"
			,"saisieArticle" => $vueDirectory."vueSaisieArticle.php", "editionArticle" => $vueDirectory."vueEditionArticle.php", "afficheArticle" => $vueDirectory."vueAfficheArticle.php","afficheCollectionArticle" => $vueDirectory."vueCollectionArticle.php","connexion"=>$vueDirectory."vueSaisieIdentifiant.php");
	
	}

	public static function getVuesErreur(){
		global $rootDirectory;
		$vueDirectory = $rootDirectory."vue/";
		return array("default" => $vueDirectory."vueErreurDefault.php","saisiePersonnage" => $vueDirectory."vueSaisiePersonnageError.php"
			,"saisieArticle" => $vueDirectory."vueSaisieArticleError.php"
			,"editionArticle"=>$vueDirectory."vueEditionArticleError.php");
	}


	public static function getStyleSheetsURL(){

		$cssDirectoryURL = "http://"/*.$_SERVER['HTTP_HOST'].*/."/localhost/Whovian/css/";
		return array("default" => $cssDirectoryURL."defaultStyle.css");

	}

	public static function generateRandomId(){ 
		$cryptoStrong = false;
		$octets = openssl_random_pseudo_bytes(5,$cryptoStrong);
		return bin2hex($octets);
	}

	public static function generateSessionId(){ 
		return generateRandomId().hash("md5", $_SERVER['REMOTE_ADDR']);
	}

}

?>


