<?php

$modeleDirectory = dirname(__FILE__)."/";

require_once($modeleDirectory.'/Model.php');

class ModelCollectionIdentifiant extends Model
{
	private $collectionIdentifiant;

	public function getData(){
		return $this->collectionIdentifiant;
	}

	private function __construct(){
		$this->collectionIdentifiant=array();
		$this->dataError = array();
	}

	public static function getModelIdentifiantAll(){
		$model = new self(array());
		$model->collectionIdentifiant = IdentifiantGateway::getIdentifiantAll($model->dataError);
		return $model;
	}
}

?>
