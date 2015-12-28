<?php

class Model{
	protected $dataError;

	public function getError(){
		if(empty($this->dataError)){
			return false;
		}
                foreach ($this->dataError as $value) {
                    echo"$value";
                }
		return $this->dataError;
	}

	public function __construct($dataError){
		$this->dataError = $dataError;
	}
}

?>
