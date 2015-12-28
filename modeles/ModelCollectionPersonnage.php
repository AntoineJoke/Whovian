<?php

$modeleDirectory = dirname(__FILE__)."/";

require_once($modeleDirectory.'/Model.php');

class ModelCollectionPersonnage extends Model
{
	private $collectionPersonnage;

	public function getData(){
		return $this->collectionPersonnage;
	}

	public function __construct(){
		$this->collectionPersonnage=array();
		$this->dataError = array();
	}

	public static function getModelPersonnageAll(){
		$model = new self(array());
                
		$model->collectionPersonnage = PersonnageGateway::getPersonnageAll($model->dataError);
                
		return $model;
	}
}

?>
