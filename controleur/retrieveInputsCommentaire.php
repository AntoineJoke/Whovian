<?php

$idCom="";
if(isset($_POST['idCom'])){
    $idCom=  htmlentities($_POST['idCom'],ENT_QUOTES,"UTF-8");
}

$idArticle="";
if(isset($_POST['idArticle'])){
    $idArticle=  htmlentities($_POST['idArticle'],ENT_QUOTES,"UTF-8");
}

$login="";
if(isset($_POST['login'])){
    $login=  htmlentities($_POST['login'],ENT_QUOTES,"UTF-8");
}

$texte="";
if(isset($_POST['texte'])){
    $texte=  htmlentities($_POST['texte'],ENT_QUOTES,"UTF-8");
}

?>