<?php

trait PersonnageProperties{ 

	public function getId(){
		return $this->id;
	}
    
	public function getNumDocteur(){
		return $this->numDocteur;
	}

	public function getAnneeDebut(){
		return $this->anneeDebut;
	}

	public function getAnneeFin(){
		return $this->anneeFin;
	}

	public function getActeur(){
		return $this->acteur;
	}

	public function getExpFav(){
		return $this->expFav;
	}
	
	public function getDescri(){
		return $this->descri;
	}

	public function getUrlImage(){
		return $this->urlImage;
	}


	public function setId($id){
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($id,1,4)){
			echo "<h1>".$id."</h1>";
			echo "<h1>".$id."</h1>";
			echo "<h1>".$id."</h1>";
			echo "<h1>".$id."</h1>";
			echo "<h1>ERREUR SUR {id}</h1>" ;

			throw new Exception("Erreur l'id doit être compsé de 4 chiffres exactement"."(chiffres)");
		}

		$this->id =empty($id) ? "" : $id;
	}

	public function setNumDocteur($numDocteur){ 
		if(!ExpressionsRegexUtils::isValidRegexFrLang($numDocteur,1,30)){
			echo "<h1>".$numDocteur."</h1>";
			echo "<h1>ERREUR SUR {numDocteur}</h1>" ;
                    
			throw new Exception("Erreur le numéro du docteur doit comporter au plus 10 caractères"." (alphabétiques)");

		}
                
		$this->numDocteur =empty($numDocteur) ? "" : $numDocteur;
	}

	public function setAnneeDebut($anneeDebut){ 
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($anneeDebut,4,4)){
			echo "<h1>".$anneeDebut."</h1>";
			echo "<h1>ERREUR SUR {anneeDebut}</h1>" ;
			throw new Exception("Erreur l'année de début doit comporter 4 caractères"." (chiffres)");

		}
		$this->anneeDebut =empty($anneeDebut) ? "" : $anneeDebut;
	}

	public function setAnneeFin($anneeFin){ 
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($anneeFin,4,4)){
			echo "<h1>".$anneeFin."</h1>";
			echo "<h1>ERREUR SUR {anneeFin}</h1>" ;
			throw new Exception("Erreur l'année de fin doit comporter 4 caractères"." (chiffres)");

		}
		$this->anneeFin =empty($anneeFin) ? "" : $anneeFin;
	}

	public function setActeur($acteur){ 
		if(!ExpressionsRegexUtils::isValidRegexFrLang($acteur,1,30)){
			echo "<h1>".$acteur."</h1>";
			echo "<h1>ERREUR SUR {acteur}</h1>" ;
			throw new Exception("Erreur l'acteur doit comporter au plus 50 caractères"." (alphabétiques)");

		}
		$this->acteur =empty($acteur) ? "" : $acteur;
	}

	public function setExpFav($expFav){
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($expFav,1,150)){
			echo "<h1>".$expFav."</h1>";
			echo "<h1>ERREUR SUR {EXPFAV}</h1>" ;
			throw new Exception("Erreur l'expression favorite doit comporter au plus 150 caractères"." (alphabétiques, chiffres ou &#-_+=)");

		}
		$this->expFav =empty($expFav) ? "" : $expFav;
	}
	
	public function setDescri($descri){
            if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($descri,1,1000)){
			echo "<h1>".$descri."</h1>";
			echo "<h1>ERREUR SUR {descri}</h1>" ;
			throw new Exception("Erreur la description doit comporter au plus 1000 caractères"." (alphabétiques, chiffres ou &#-_+=)");

		}
		$this->descri =empty($descri) ? "" : $descri;
	}
	
	public function seturlImage($urlImage){ 
            if($urlImage==NULL){
                $this->urlImage =" ";
                return;
            }
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($urlImage,1,50)){
			echo "<h1>".$urlImage."</h1>";
			echo "<h1>ERREUR SUR {urlImage}</h1>" ;
			throw new Exception("Erreur l'url de l'Image doit comporter au plus 50 caractères"." (alphabétiques ou chiffres)");

		}
		$this->urlImage =empty($urlImage) ? "" : $urlImage;
	}

}


?>
