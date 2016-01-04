<?php

require_once(dirname(__FILE__). '/ExpressionsRegexUtils.php') ;
require_once(dirname(__FILE__). '/PersonnagePropertiesTrait.php') ;


class Personnage{ 

	private $id;

	private $numDocteur;

	private $anneeDebut;

	private $anneeFin;

	private $acteur;

	private $expFav;
	
	private $descri;
	
	private $urlImage;

	use PersonnageProperties;

	public function __construct($id,$numDocteur,$anneeDebut,$anneeFin,$acteur,$expFav,$descri,$urlImage){
		$this->setId($id);
		$this->setNumDocteur($numDocteur);
		$this->setAnneeDebut($anneeDebut);
		$this->setAnneeFin($anneeFin);
		$this->setActeur($acteur);
		$this->setExpFav($expFav);
		$this->setDescri($descri);
        $this->setUrlImage($urlImage);
      
	} 

	public static function getDefaultPersonnage(){ 
             
		$personnage=new Personnage(' ',' ','2015','2015',' ',' ',' ',NULL);
               
		return $personnage;
	}


}

?>
