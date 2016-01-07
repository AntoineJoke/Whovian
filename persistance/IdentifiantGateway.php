<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class IdentifiantGateway{
    public static function getRoleByPassword(&$dataError,$login,$mdp) {
        try{
            $statement=  DataBaseManager::getInstance()->prepareAndExecuteQuery('SELECT * FROM Identifiant WHERE login=?',array($login));
        } catch (Exception $e) {
            $dataError['requete']="Impossible d'accéder aux données.";
        }
        if($statement ===false){
            $dataError['login'] = "Impossible d'accéder à la table des utilisateurs ";
            return "";
        }
        $row =$statement->fetch();
        $identifiant= IdentifiantFabrique::getIdentifiant($dataErrors, $row['login'], $row['password']);
        
		if($row['password']!= $mdp){
            $dataError['login'] = "Login ou mot de passe incorrect";
        }
        return $identifiant;
    }
}
