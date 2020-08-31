<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller{
    public function index(){
        // dd($_SERVER);
        $user = [
            'cuix' => $_SERVER['OIDC_CLAIM_preferred_username'],
            'nombre' => $_SERVER['OIDC_CLAIM_given_name'],
            'familia' => $_SERVER['OIDC_CLAIM_family_name'],
        ];
        return view('main.index', ['user' => $user]);
    }
    public function logout(){
        $_SESSION = array();
        if (ini_get("session.use_cookies")) { 
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
            setcookie('mod_auth_openidc_session', '', time() - 42000,$params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }
        // session_destroy();
        return redirect('/');
    }
}
