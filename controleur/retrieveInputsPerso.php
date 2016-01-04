<?php

$id="";
if(isset($_POST['id'])){
    $id=  htmlentities($_POST['id'],ENT_QUOTES,"UTF-8");
}

$numDocteur="";
if(isset($_POST['numDocteur'])){
    $numDocteur=  htmlentities($_POST['numDocteur'],ENT_QUOTES,"UTF-8");
}

$anneeDebut="";
if(isset($_POST['anneeDebut'])){
    $anneeDebut=  htmlentities($_POST['anneeDebut'],ENT_QUOTES,"UTF-8");
}

$anneeFin="";
if(isset($_POST['anneeFin'])){
    $anneeFin=  htmlentities($_POST['anneeFin'],ENT_QUOTES,"UTF-8");
}

$acteur="";
if(isset($_POST['acteur'])){
    $acteur=  htmlentities($_POST['acteur'],ENT_QUOTES,"UTF-8");
}

$expFav="";
if(isset($_POST['expFav'])){
    $expFav=  htmlentities($_POST['expFav'],ENT_QUOTES,"UTF-8");
}

$descri="";
if(isset($_POST['descri'])){
    $descri=  htmlentities($_POST['descri'],ENT_QUOTES,"UTF-8");
}

$urlImage="";
if(isset($_POST['urlImage'])){
    $urlImage=  htmlentities($_POST['urlImage'],ENT_QUOTES,"UTF-8");
}