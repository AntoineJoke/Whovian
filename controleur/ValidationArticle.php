<?php
	$dataErrors = array();

	$id=filter_var($id,FILTER_SANITIZE_NUMBER_INT);
	$titre=filter_var($titre,FILTER_SANITIZE_STRING);
	$urlImage=filter_var($urlImage,FILTER_SANITIZE_STRING);
	$texte=filter_var($texte,FILTER_SANITIZE_STRING);
?>
