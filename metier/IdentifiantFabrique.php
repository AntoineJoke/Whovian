<?php
require_once("/Identifiant.php");

class IdentifiantFabrique{ 
	public static function getIdentifiant(&$dataErrors, $login=null, $mdp=null){ 
		$identifiant=Identifiant::getDefaultIdentifiant();
		$dataErrors=array();

		try{ 
			$identifiant->setLogin($login);
		}catch (Exception $e){
			$dataErrors['login']=$e->getMessage()."<br/>\n";

		}

		try{
			$identifiant->setMdp($mdp);
		}catch (Exception $e){ 
			$dataErrors['mdp']=$e->getMessage()."<br/>\n";
			
		}
		return $identifiant;
	}

}

?>