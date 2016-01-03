<?php

$modeleDirectory = dirname(__FILE__)."/";

require_once($modeleDirectory.'/Model.php');

class ModelPersonnage extends Model
{
	private $personnage;
	private $title;
	
	public function getData(){
		return $this->personnage;
	}

	public function getTitle(){
		return $this->title;
	}

	public static function getModelDefaultPersonnage(){
	$model = new self(array());
	$model->personnage = Personnage::getDefaultPersonnage();
	$model->title = "Saisie d'un personnage";
	return $model;
	}

	public static function getModelPersonnage($id){
		$model = new self(array());
		$model->personnage = PersonnageGateway::getPersonnageById($model->dataError, $id);
		$model->title = "Fiche détaillée";
		return $model;
	}

	public static function getModelPersonnagePost($id, $numDoctor, $anneeDebut, $anneeFin, $acteur, $expFav,$descri,$urlImage){
		$model = new self(array());
		$personnage = PersonnageFabrique::getPersonnage($model->dataError,$numDoctor, $anneeDebut, $anneeFin, $acteur, $expFav,$descri,$urlImage);
		$model->personnage = PersonnageGateway::postPersonnage($model->dataError, $personnage);
		$model->title = "Le personnage a été mis à jour";
		return $model;
	}

	public static function getModelPersonnagePut($numDoctor, $anneeDebut, $anneeFin, $acteur, $expFav,$descri,$urlImage){
		$model = new self(array());
		$personnage = PersonnageFabrique::getPersonnage($model->dataError,"0000", $numDoctor, $anneeDebut, $anneeFin, $acteur, $expFav,$descri,$urlImage);
		$model->personnage = PersonnageGateway::putPersonnage($model->dataError, $personnage);
		$model->title = "Le personnage à été inséré";
		return $model;
	}

	public static function deletePersonnage($id){
		$model = new self(array());
		$model->personnage = PersonnageGateway::deletePersonnage($model->dataError, $id);
		$model->title = "Personnage supprimée";
		return $model;
	}
}
?>
