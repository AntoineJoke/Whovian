<?php

class Controleur{ 

	function __construct()
		{
			try {
				$action=isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
				
				switch ($action) {
                                        case "deco":
                                            session_start();
                                            session_unset();
                                            session_destroy();
                                            $_SESSION=array();
                                            require (Config::getVues()["default"]);
                                            break;
                                    
					case "saisie-co":
						$modele = ModelIdentifiant::getModelDefaultIdentifiant();
						require(Config::getVues()["connexion"]);
 						break;

					case "get-co":
						$login = filter_var($_REQUEST['login'],FILTER_SANITIZE_STRING);
                        $mdp = filter_var($_REQUEST['mdp'],FILTER_SANITIZE_STRING);
						$dataError="";
						
						$modele = Authentification::checkAndInitiateSession($login,$mdp,$dataError);
						if ($modele->getError()==false) {
							require(Config::getVues()["connexionOk"]);
						}else{
							require(Config::getVuesErreur()["connexion"]);
						}
						break;

					case "saisie-news":
						$modele = ModelArticle::getModelDefaultArticle();
						require(Config::getVues()["saisieArticle"]);
						break;

					case "get-news":
						$idArticle = filter_var($_REQUEST['id'],FILTER_SANITIZE_NUMBER_INT);
						$modele = ModelArticle::getModelArticle($idArticle);
                                                $listCom= ModelCollectionCommentaire::getModelCommentaireAllByIdArticle($idArticle);
						require(Config::getVues()["afficheArticle"]);
						break;

					case "get-all-news":      
						$modele = ModelCollectionArticle::getModelArticleAll();
                                                $a=$modele->getError();
						if ($modele->getError()===false) {
							require(Config::getVues()["afficheCollectionArticle"]);
						}else{ 
							require (Config::getVuesErreur()["default"]);
                                                        
						}
						break;

					case "edit-news":
						$id = filter_var($_REQUEST['id'],FILTER_SANITIZE_NUMBER_INT);
						$modele = ModelArticle::getModelArticle($id);
						if ($modele->getError()==false) {
							require(Config::getVues()["editionArticle"]);
						}else{

							require(Config::getVuesErreur()["default"]);
						}
						break;

					case "post-news":
                                                require (dirname(__FILE__)."/retrieveInputsArticle.php");
						require (dirname(__FILE__)."/validationArticle.php");
						$modele = ModelArticle::getModelArticlePost($id,$titre,$urlImage,$texte);
						if ($modele->getError()==false) {
							require(Config::getVues()["afficheCollectionArticle"]);
						}else{

							require(Config::getVuesErreur()["editionArticle"]);
						}
						break;

					case "put-news":
                                                require (dirname(__FILE__)."/retrieveInputsArticle.php");
						require (dirname(__FILE__)."/validationArticle.php");
						$modele = ModelArticle::getModelArticlePut($titre,$urlImage,$texte);
						if ($modele->getError()==false) {
                                                        $modele = ModelCollectionArticle::getModelArticleAll();
							require(Config::getVues()["afficheCollectionArticle"]);
						}else{
							require(Config::getVuesErreur()["saisieArticle"]);
						}
						break;

					case "delete-news":
						$id = filter_var($_REQUEST['id'],FILTER_SANITIZE_NUMBER_INT);
                                                ModelCollectionCommentaire::deleteModelCommentaireAllByIdArticle($id);
						$modele = ModelArticle::deleteArticle($id);
						if ($modele->getError()==false) {
							require(Config::getVues()["suppArticle"]);
						}else{
							require(Config::getVuesErreur()["default"]);
						}
						break;

					case "put-com":
                                                require (dirname(__FILE__)."/retrieveInputsCommentaire.php");
						require (dirname(__FILE__)."/validationCommentaire.php");
						$com = ModelCommentaire::getModelCommentairePut($idCom,$idArticle,$login,$texte);
                                                $modele = ModelArticle::getModelArticle($idArticle);
                                                $listCom= ModelCollectionCommentaire::getModelCommentaireAllByIdArticle($idArticle);
                                                require(Config::getVues()["afficheArticle"]);
						break;
                                                
                                        case "delete-com":
						$idCom = filter_var($_REQUEST['idCom'],FILTER_SANITIZE_NUMBER_INT);
						$com = ModelCommentaire::deleteCommentaire($idCom);
                                                $idArticle=$com->getIdArticle();
                                                $modele = ModelArticle::getModelArticle($idArticle);
                                                $listCom= ModelCollectionCommentaire::getModelCommentaireAllByIdArticle($idArticle);
                                                require(Config::getVues()["afficheArticle"]);

						break;

					case "get":
						$id = filter_var($_REQUEST['id'],FILTER_SANITIZE_NUMBER_INT);
						$modele = ModelPersonnage::getModelPersonnage($id);
						require(Config::getVues()["affichePersonnage"]);
						break;

					case "get-all":      
						$modele = ModelCollectionPersonnage::getModelPersonnageAll();
                                                $a=$modele->getError();
						if ($modele->getError()===false) {
							require(Config::getVues()["afficheCollectionPersonnage"]);
						}else{ 
							require (Config::getVuesErreur()["default"]);
                                                        
						}
						break;

					case "saisie":
						$modele = ModelPersonnage::getModelDefaultPersonnage();
						require(Config::getVues()["saisiePersonnage"]);
						break;

					case "edit":
						$id = filter_var($_REQUEST['id'],FILTER_SANITIZE_NUMBER_INT);
						$modele = ModelPersonnage::getModelPersonnage($id);
						if ($modele->getError()==false) {
                                                    
							require(Config::getVues()["editionPersonnage"]);
						}else{

							require(Config::getVuesErreur()["editionPersonnage"]);
						}
						break;

					case "post":
                        require (dirname(__FILE__)."/retrieveInputsPerso.php");
						require (dirname(__FILE__)."/validationPersonnage.php");
						$modele = ModelPersonnage::getModelPersonnagePost($id,$numDocteur,$anneeDebut,$anneeFin,$acteur,$expFav,$descri,$urlImage);
						if ($modele->getError()==false) {
							require(Config::getVues()["affichePersonnage"]);
						}else{

							require(Config::getVuesErreur()["saisiePersonnage"]);
						}
						break;

					case "put":
                        require (dirname(__FILE__)."/retrieveInputsPerso.php");
						require (dirname(__FILE__)."/validationPersonnage.php");
						$modele = ModelPersonnage::getModelPersonnagePut($id,$numDocteur,$anneeDebut,$anneeFin,$acteur,$expFav,$descri,$urlImage);
						if ($modele->getError()==false) {
							require(Config::getVues()["affichePersonnage"]);
						}else{
							require(Config::getVuesErreur()["saisiePersonnage"]);
						}
						break;

					case "delete":
						$id = filter_var($_REQUEST['id'],FILTER_SANITIZE_NUMBER_INT);
						$modele = ModelPersonnage::deletePersonnage($id);
						if ($modele->getError()==false) {
							require(Config::getVues()["affichePersonnage"]);
						}else{
							require(Config::getVuesErreur()["default"]);
						}
						break;

					default:
                                            
						require (Config::getVues()["default"]);
						break;
				}
				
			} 
			catch (Exception $e) {
				$modele = new Model(array('exception'=>$e->getMessage()));
				require(Config::getVuesErreur()["default"]);
			}
		}	
}
?>
