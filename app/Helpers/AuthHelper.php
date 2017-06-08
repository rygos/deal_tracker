<?php

namespace App\Helpers;

class AuthHelper{
    public static function user(){
        //Läd Benutzernamen aus ENV
        $user = getenv('username');

        //Schaut nach dem Nutzer in der Datenbank
        $userDB = \DB::table('dt_user')->where('short_name', '=', $user)->first();

        //Wenn User vorhanden, dann Nutzerdaten ausgeben, ansonsten return null!
        if($user){
            $user = $userDB;
        }else{
            $user = null;
        }

        return $user;
    }
}