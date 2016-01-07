<?php

$modeleDirectory = dirname(__FILE__)."/";

require_once($modeleDirectory.'/Model.php');


class ModelArticle extends Model
{
	private $commentaire;
	private $title;
	
	public function getData(){
		return $this->commentaire;
	}

	public function getTitle(){
		return $this->title;
	}

	public static function getModelDefaultCommentaire(){
	$model = new self(array());
	$model->commentaire = Commentaire::getDefaultCommentaire();
	$model->title = "Saisie d'un commentaire";
	return $model;
	}

	public static function getModelCommentaire($idCom){
		$model = new self(array());
		$model->commentaire = ArticleGateway::getCommentaireById($model->dataError, $idCom);
		$model->title = "Commentaire détaillé";
		return $model;
	}

	public static function getModelCommentairePost($idCom, $idArticle, $login, $texte){
		$model = new self(array());
		$commentaire = CommentaireFabrique::getCommentaire($model->dataError,$idCom, $idArticle, $login, $texte);
		$model->commentaire = CommentaireGateway::postCommentaire($model->dataError, $commentaire);
		$model->title = "Le commentaire a été mis à jour";
		return $model;
	}

	public static function getModelCommentairePut($idCom,$idArticle, $login, $texte){
		$model = new self(array());
		$commentaire = CommentaireFabrique::getCommentaire($model->dataError,$idCom, $idArticle, $login, $texte);
		$model->commentaire = CommentaireGateway::putCommentaire($model->dataError, $commentaire);
		$model->title = "Le commentaire à été inséré";
		return $model;
	}

	public static function deleteCommentaire($idCom){
		$model = new self(array());
		$model->commentaire = CommentaireGateway::deleteArticle($model->dataError, $idCom);
		$model->title = "Commentaire supprimée";
		return $model;
	}
}
?>
