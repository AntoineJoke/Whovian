<?php


trait ArticleProperties{ 

	public function getId(){
		return $this->id;
	}

	public function getTitre(){
		return $this->titre;
	}

	public function getUrlImage(){
		return $this->urlImage;
	}

	public function getTexte(){
		return $this->texte;
	}

	public function setId($id){
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($id,1,4)){
			throw new Exception("Erreur l'id doit comporter au plus 4 chiffres"." (chiffres)");
		}
		$this->id =empty($id) ? "" : $id;
	}

	public function setTitre($titre){
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($titre,1,50)){
			throw new Exception("Erreur le titre doit comporter au plus 50 caractères"." (alphabétiques)");
		}
		$this->titre =empty($titre) ? "" : $titre;
	}

	public function setUrlImage($urlImage){
		if($urlImage==NULL){
                $this->urlImage =" ";
                return;
        }
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($urlImage,1,50)){
			throw new Exception("Erreur l'url de l'image doit comporter au plus 50 caractères"." (alphabétiques)");

		}
		$this->urlImage =empty($urlImage) ? "" : $urlImage;
	}

	public function setTexte($texte){
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($texte,1,3000)){
			throw new Exception("Erreur le texte doit comporter au plus 3000 caractères"." (alphabétiques)");

		}
		$this->texte =empty($texte) ? "" : $texte;
	}
}


?>