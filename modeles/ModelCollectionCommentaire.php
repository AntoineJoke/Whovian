<?php

$modeleDirectory = dirname(__FILE__)."/";

require_once($modeleDirectory.'/Model.php');
class ModelCollectionCommentaire extends Model
{
	private $collectionCommentaire;

	public function getData(){
		return $this->collectionCommentaire;
	}

	public function __construct(){
		$this->collectionCommentaire=array();
		$this->dataError = array();
	}

	public static function getModelCommentaireAll(){
		$model = new self(array());
		$model->collectionCommentaire = CommentaireGateway::getCommentaireAll($model->dataError);
		return $model;
	}
}

?>
