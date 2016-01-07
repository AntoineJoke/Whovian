<?php
require_once(dirname(__FILE__).'/ExpressionsRegexUtils.php') ;
require_once(dirname(__FILE__).'/CommentairePropertiesTrait.php') ;

class Commentaire{ 

	private $idCom;

	private $idArticle;

	private $login;

	private $texte;

	use CommentaireProperties;

	public function __construct($idCom,$idArticle,$login,$texte){
		$this->setId($idCom);
		$this->setTitre($idArticle);
		$this->setLogin($login);
		$this->setTexte($texte);
	} 

	public static function getDefaultArticle(){ 
		$commentaire=new Article("0000","0000"," "," ");
		return $commentaire;
	}


}

?>