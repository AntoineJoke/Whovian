<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AuthUtils{
   
    public static function isStrongPassword($wouldBePasswd) {
        $lengthCondition = (strlen($wouldBePasswd)>= 8 && strlen($wouldBePasswd)<=35);
        
        $CharacterDiversityCondition = preg_match("/[a-z]/",$wouldBePasswd) && preg_match("/[A-Z]/", $wouldBePasswd) && preg_match("/[0-9]/", $wouldBePasswd) && preg_match("/|\#-\|\.\@\[\]\=\!\&]/",$wouldBePasswd);
        return $lengthCondition && $CharacterDiversityCondition;
    }
    
    public static function generateSessionIdAndCookie($idAddress,&$mySid_part1){
        $cryptoStrong = false;
        $octects = openssl_random_pseudo_bytes(5, $cryptoStrong);
        $mySid_part1 = bin2hex($octects);
        $mySid_part2 = hash("md5", $idAddress);
        
        $mySid = $mySid_part1.$mySid_part2;
        return $mySid;
    }
    
}

?>