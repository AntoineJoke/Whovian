<?php

$id="";
if(isset($_POST['id'])){
    $id=  htmlentities($_POST['id'],ENT_QUOTES,"UTF-8");
}

$titre="";
if(isset($_POST['titre'])){
    $titre=  htmlentities($_POST['titre'],ENT_QUOTES,"UTF-8");
}

$urlImage="";
if(isset($_POST['urlImage'])){
    $urlImage=  htmlentities($_POST['urlImage'],ENT_QUOTES,"UTF-8");
}

$texte="";
if(isset($_POST['texte'])){
    $texte=  htmlentities($_POST['texte'],ENT_QUOTES,"UTF-8");
}

?>