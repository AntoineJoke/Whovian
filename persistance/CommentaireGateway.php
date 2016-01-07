<?php
class CommentaireGateway{


	public static function getCommentaireById(&$dataError,$idCom){
		if(isset($idCom)){
			try{
				$statement=DataBaseManager::getInstance()->prepareAndExecuteQuery('SELECT *FROM Commentaire WHERE idCom=?',array($idCom));

			}
			catch(Exception $e){
				echo "Impossible d'accéder aux données.";
				$dataError['requete'] = "Impossible d'accéder aux données.";
			}
			if($statement!=false){

				$count = 0;
				foreach ($statement as $row) {
					$count++;
					$commentaire = CommentaireFabrique::getCommentaire($dataError,$row['idCom'],$row['idArticle'],$row['login'],$row['texte']);

				}

				if ($count!=1) {
					$dataError['persistance-get'] = "Commentaire introuvable.";
				}
			}else{
				$dataError['persistance-get'] = "Commentaire introuvable.";			
			}
		}else{
			$dataError['persistance-get'] = "Impossible d'accéder aux données.";
		}

		return $commentaire;


	}

        public static function getCommentaireAllByIdArticle(&$dataError,$idArticle){
            try {
			
			$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('SELECT * FROM Commentaire WHERE idArticle=?', array($idArticle));
                        
                        
		} catch (Exception $e) {
                    
			$dataError['persistance-get'] = "Impossible d'accéder aux données.";
		}

		$collectionCommentaire = array();
                
		if($statement!==false){
                    
			foreach ($statement as $row) {
				$commentaire = CommentaireFabrique::getCommentaire($dataError,$row['idCom'],$row['idArticle'],$row['login'],$row['texte']);
				$collectionCommentaire[]=$commentaire;
                                
			}
		}
		else{
                    
			$dataError['persistance-get'] = "Aucun commentaire trouvable.";
		}
                
                
		DataBaseManager::destroyQueryResults($statement);
		return $collectionCommentaire;
                
	}

        
	public static function getCommentaireAll(&$dataError){
            
		try {
			
			$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('SELECT * FROM Commentaire', array());
                         
                        
		} catch (Exception $e) {
                    
			$dataError['persistance-get'] = "Impossible d'accéder aux données.";
		}

		$collectionCommentaire = array();
                
                
		if($statement!==false){
                    
			foreach ($statement as $row) {
               
				$commentaire = CommentaireFabrique::getCommentaire($dataError,$row['id'],$row['idArticle'],$row['Login'],$row['Texte']);
				$collectionCommentaire[]=$commentaire;
                                
			}
		}
		else{
                    
			$dataError['persistance-get'] = "Aucun commentaire trouvable.";
		}
                
                
		DataBaseManager::destroyQueryResults($statement);
		return $collectionCommentaire;
	}


	public static function postCommentaire(&$dataError,$commentaire){
		$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('UPDATE Commentaire SET idArticle=?,login=?,texte=? WHERE idCom=?', 
			array(
                
                                $commentaire->getIdArticle(),
				$commentaire->getIdLogin(),
				$commentaire->getIdTexte(),
                                $commentaire->getIdCom()
			)
		);

		if ($statement == false ) {
			$dataError['persistance-get'] = "Probleme d'exécution de la requête.";
		}

		DataBaseManager::destroyQueryResults($statement);

		return $commentaire;

	}

	public static function putCommentaire(&$dataError,$commentaire){

		$statement = false;
		$count = 0;

		while($statement == false && $count<=3){
			$count++;
			$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('INSERT INTO Commentaire(idCom,idArticle,login,texte) VALUES(?,?,?,?)',
				array(
					$commentaire->getIdCom(),
					$commentaire->getIdArticle(),
					$commentaire->getLogin(),
					$commentaire->getTexte()
				)
			);
			if ($statement->rowCount()<1) {
		  		$statement = false;
			}  

		}
		if ($statement == false) {
			$dataError['persistance-get'] = "Probleme d'exécution de la requête.";
		}
		else{
			DataBaseManager::destroyQueryResults($statement);
		}

		return $commentaire;

	}


	public static function deleteCommentaire(&$dataError,$idCom){
		$commentaire = self::getCommentaireById($dataError,$idCom);

		if (empty($dataError)) {
			$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('DELETE FROM Commentaire WHERE idCom=?',array($idCom));
			if ($statement == false) {
				$dataError['persistance-get'] = "Probleme d'exécution de la requête.";
			}
				DataBaseManager::destroyQueryResults($statement);
		}
		return $commentaire;
	}
}

?>
