<?php


trait CommentaireProperties{ 

	public function getIdCom(){
		return $this->idCom;
	}

	public function getIdArticle(){
		return $this->idArticle;
	}

	public function getLogin(){
		return $this->login;
	}

	public function getTexte(){
		return $this->texte;
	}

	public function setIdCom($idCom){
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($idCom,1,4)){
			throw new Exception("Erreur l'id de commentaire doit comporter au plus 4 chiffres"." (chiffres)");
		}
		$this->idCom =empty($idCom) ? "" : $idCom;
	}

	public function setIdArticle($idArticle){
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($idArticle,1,4)){
			throw new Exception("Erreur l'id d'Article doit comporter au plus 4 caractères"." (chiffres)");
		}
		$this->idArticle =empty($idArticle) ? "" : $idArticle;
	}

	public function setLogin($login){
		if($login==NULL || $login==" "){
                $this->login ="Anonymous";
                return;
        }
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($login,1,20)){
			throw new Exception("Erreur l'url du login doit comporter au plus 20 caractères"." (alphabétiques)");

		}
		$this->login =empty($login) ? "" : $login;
	}

	public function setTexte($texte){
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($texte,1,500)){
			throw new Exception("Erreur le texte doit comporter au plus 500 caractères"." (alphabétiques)");

		}
		$this->texte =empty($texte) ? "" : $texte;
	}
}


?>