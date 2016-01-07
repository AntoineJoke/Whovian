<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Authentification {
    public static function checkAndInitiateSession($login,$mdp,$dataError){
        if(!empty($dataError)){
            return new Model($dataError);
        }
        
        $identifiantModel = ModelIdentifiant::getModelIdentifiant($login, $mdp);
        if($identifiantModel->getError()!==false){
            return $identifiantModel;
        }
        
        session_start();
        $identifiantModel->fillSessionData();
        return $identifiantModel;
        
    }
    
    public static function restoreSession() {
        $dataError= array();
        if(!isset($_COOKIE['session-id-part1']) || !preg_match("/^[0-9a-fA-F]{10}$/", $_COOKIE['session-id-part1'])){
            $dataError['no_cookie'] = "Votre cookie a peut-être expirée, Merci de vous connecter à nouveau...";
            $identifiantModel=new Model($dataError);
        }else{
            $mySid_part1 = $_COOKIE['session-id-part1'];
            $mySid_part2 =  hash("md5", $_SERVER['REMOTE_ADDR']);
            $mySid =$mySid_part1.$mySid_part2;
            session_id($mySid);
            session_start();
            setcookie("seesion-id-part1",$mySid_part1,time()+60*2);
            $identifiantModel = ModelIdentifiant::getModelIdentifiantFromSession();
            session_write_close();
        }        
        return $identifiantModel;
    }
}