<?php


trait IdentifiantProperties{ 

	public function getLogin(){
		return $this->login;
	}

	public function getMdp(){
		return $this->mdp;
	}

	public function setLogin($login){ 
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($login,1,15)){
			throw new Exception("Erreur le login doit être composé de au plus 15 caractères "."(alphabétiques)");
		}
		$this->login =empty($login) ? "" : $login;
	}

	public function setMdp($mdp){ 
		if(!ExpressionsRegexUtils::isValidRegexFrLangWithNumbers($mdp,8,15)){
			throw new Exception("Erreur le mot de passe doit être composé de minimum 8 caractères, maximum 15 caractères "."(alphabétiques)");
		}
		$this->mdp =empty($mdp) ? "" : $mdp;
	}
}


?>