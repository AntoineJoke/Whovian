<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$login="";
if(isset($_POST['login'])){
    $login=  htmlentities($_POST['login'],ENT_QUOTES,"UTF-8");
}

$mdp="";
if(isset($_POST['mdp'])){
    $mdp=  htmlentities($_POST['mdp'],ENT_QUOTES,"UTF-8");
}

?>

