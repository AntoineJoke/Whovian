<?php
class PersonnageGateway{


	public static function getPersonnageById(&$dataError,$id){
		if(isset($id)){
			try{
				$statement=DataBaseManager::getInstance()->prepareAndExecuteQuery('SELECT *FROM Personnage WHERE id=?',array($id));

			}
			catch(Exception $e){
				echo "Impossible d'accéder aux données.";
				$dataError['requete'] = "Impossible d'accéder aux données.";
			}
			if($statement!=false){

				$count = 0;
				foreach ($statement as $row) {
					$count++;
					$personnage = PersonnageFabrique::getPersonnage($dataError,$row['id'],$row['numDocteur'],$row['anneeDebut'],$row['anneeFin'],$row['acteur'],$row['expFav'],$row['descri'],$row['urlImage']);

				}

				if ($count!=1) {
					$dataError['persistance-get'] = "Personnage introuvable.";
				}
			}else{
				$dataError['persistance-get'] = "Personnage introuvable.";			
			}
		}else{
			$dataError['persistance-get'] = "Impossible d'accéder aux données.";
		}

		return $personnage;


	}


	public static function getPersonnageAll(&$dataError){
            
		try {
			
			$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('SELECT * FROM Personnage', array());
                         
                        
		} catch (Exception $e) {
                    
			$dataError['persistance-get'] = "Impossible d'accéder aux données.";
		}

		$collectionPersonnage = array();
                
                
		if($statement!==false){
                    
			foreach ($statement as $row) {
               
				$personnage = PersonnageFabrique::getPersonnage($dataError,$row['id'],$row['numDocteur'],$row['anneeDebut'],$row['anneeFin'],$row['acteur'],$row['expFav'],$row['descri'],$row['urlImage']);
				$collectionPersonnage[]=$personnage;
                                
			}
		}
		else{
                    
			$dataError['persistance-get'] = "Aucun personnage trouvable.";
		}
                
                
		DataBaseManager::destroyQueryResults($statement);
		return $collectionPersonnage;
	}


	public static function postPersonnage(&$dataError,$personnage){
		$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('UPDATE Personnage SET id=?,numDocteur=?,anneeDebut=?,anneeFin=?,acteur=?,expFav=?,descri=?,urlImage=? WHERE numDocteur=?', 
			array($personnage->getNumDocteur(),
					$personnage->getAnneeDebut(),
					$personnage->getAnneeFin(),
					$personnage->getActeur(),
					$personnage->getExpFav(),
					$personnage->getDesc(),
					$personnage->getUrlImage()
			)
		);

		if ($statement == false ) {
			$dataError['persistance-get'] = "Probleme d'exécution de la requête.";
		}

		DataBaseManager::destroyQueryResults($statement);

		return $personnage;

	}

	public static function putPersonnage(&$dataError,$personnage){

		$statement = false;
		$count = 0;

		while($statement == false && $count<=3){
			$count++;
			$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('INSERT INTO Personnage(id,numDocteur,anneeDebut,anneeFin,acteur,expFav,descri,urlImage) VALUES(?,?,?,?,?,?,?)',
				array(
					$persaonnge->getId(),
					$personnage->getNumDocteur(),
					$personnage->getAnneeDebut(),
					$personnage->getAnneeFin(),
					$personnage->getActeur(),
					$personnage->getExpFav(),
					$personnage->getDesc(),
					$personnage->getUrlImage()
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

		return $personnage;

	}


	public static function deletePersonnage(&$dataError,$id){
		$personnage = self::getPersonnageById($dataError,$id);

		if (empty($dataError)) {
			$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('DELETE FROM Personnage WHERE id=?',array($id));
			if ($statement == false) {
				$dataError['persistance-get'] = "Probleme d'exécution de la requête.";
			}
				DataBaseManager::destroyQueryResults($statement);
		}
		return $personnage;
	}
}

?>
