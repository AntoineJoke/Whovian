<?php

$modeleDirectory = dirname(__FILE__)."/";

require_once($modeleDirectory.'/Model.php');


class ModelIdentifiant extends Model
{
        private $identifiant;
        private $login;
	private $title;
        private $role;
        
        public function getRole() {
            return $this->role;
        }
	
        public static function getModelIdentifiant($login,$mdp) {
            $model = new self(array());
            
            $model->identifiant=IdentifiantGateway::getRoleByPassword($model->dataError,$login,$mdp);
            
            if($model->role!==false){
                $model->login = $login; 
            }else{
                $model->dataError['login'] = "Login ou mot de passe incorrect.";
            }
			
            return $model;
        }
        
        public function fillSessionData(){
            $_SESSION['login']=  $this->login;
            $_SESSION['role']= "admin";
            $_SESSION['ipAddress'] = $_SERVER['REMOTE_ADDR'];
        }
        
        public static function isConnect() {
        if(isset($_SESSION['login'])){
                return true;
            }
            return false;
        }
        
        public static function getModelIdentifiantFromSession(){
            $model = new self(array());
            if(!isset($_SESSION['login']) || !isset($_SESSION['role']) || !isset($_SESSION['ipAddress']) || ($_SESSION['ipAddress']!=$_SERVER['REMOTE_ADDR'])){
                $model->dataError['session'] = "Unable to recover identifiant session ."; 
            }
            else{
                $model->role = $_SESSION['role'];
                $model->login = $_SESSION['login'];
            }
            return $model;
        }

                
	public function getData(){
		return $this->identifiant;
	}

	public function getTitle(){
		return $this->title;
	}

	public static function getModelDefaultIdentifiant(){
	$model = new self(array());
	$model->identifiant = Identifiant::getDefaultIdentifiant();
	$model->title = "Saisie d'un identifiant";
	return $model;
	}

	

	public static function getModelIdentifiantPost($login, $mdp){
		$model = new self(array());
		$identifiant = IdentifiantFabrique::getIdentifiant($model->dataError,$login,$mdp);
		$model->identifiant = IdentifiantGateway::postIdentifiant($model->dataError, $identifiant);
		$model->title = "L'identifiant a été mis à jour";
		return $model;
	}

	public static function getModelIdentifiantPut($login,$mdp){
		$model = new self(array());
		$identifiant = IdentifiantFabrique::getIdentifiant($model->dataError,$login, $mdp);
		$model->identifiant = IdentifiantGateway::putIdentifiant($model->dataError, $identifiant);
		$model->title = "L'identifiant à été inséré";
		return $model;
	}

	public static function deleteIdentifiant($login){
		$model = new self(array());
		$model->identifiant = IdentifiantGateway::deleteIdentifiant($model->dataError, $login);
		$model->title = "Identifiant supprimée";
		return $model;
	}
}
?>
