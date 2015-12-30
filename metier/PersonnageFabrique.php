<?php
require_once(dirname(__FILE__). '/Personnage.php');

class PersonnageFabrique{ 
	public static function getPersonnage(&$dataErrors, $id=null, $numDocteur=null, $anneeDebut=null, $anneeFin=null, $acteur=null, $expFav=null,$descri=null,$urlImage=null){ 
            
		$perso=Personnage::getDefaultPersonnage();
		$dataErrors=array();

		try{ 
                    
			$perso->setId($id);
		}catch (Exception $e){ 
			$dataErrors['id']=$e->getMessage()."<br/>\n";

		}


		try{ 
                    
			$perso->setNumDocteur($numDocteur);
		}catch (Exception $e){ 
			$dataErrors['numDocteur']=$e->getMessage()."<br/>\n";

		}

		try{
			$perso->setAnneeDebut($anneeDebut);
		}catch (Exception $e){ 
			$dataErrors['anneeDebut']=$e->getMessage()."<br/>\n";
			
		}

		try{
			$perso->setAnneeDebut($anneeFin);
		}catch (Exception $e){ 
			$dataErrors['anneeFin']=$e->getMessage()."<br/>\n";
			
		}

		try{
			$perso->setActeur($acteur);
		}catch (Exception $e){ 
			$dataErrors['acteur']=$e->getMessage()."<br/>\n";
			
		}
                
		try{
			$perso->setExpFav($expFav);
		}catch (Exception $e){ 
			$dataErrors['expFav']=$e->getMessage()."<br/>\n";
			
		}
		
		try{
			$perso->setDescri($descri);
		}catch (Exception $e){ 
			$dataErrors['descri']=$e->getMessage()."<br/>\n";
			
		}
		
		try{
			$perso->setUrlImage($urlImage);
		}catch (Exception $e){ 
			$dataErrors['urlImage']=$e->getMessage()."<br/>\n";
			
		}
		
		return $perso;
	}

}

?>
