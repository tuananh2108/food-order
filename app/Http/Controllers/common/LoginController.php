<?php

namespace App\Http\Controllers\common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    const ROLE_USER = ['admin' => 'ADMIN', 'client' => 'CLIENT', 'guest' => 'GUEST'];

    public function login(Request $request)
    {
        $params = $request->params;
//        if($request->remember = 'Remember Me')
//        {
//            $remember = true;
//        }
//        else {
//            $remember = false;
//        }
        if(Auth::attempt(['email' => $params['email'], 'password' => $params['password']]))
        {
            if(Auth::user()->role->uid == self::ROLE_USER['admin']) {
                return [ 'code' => 200, 'url' => 'admin/dashboard' ];
            }
            else {
                return [ 'code' => 200, 'url' => '/' ];
            }
        }
        else {
            return [ 'url' => '/', 'code' => 190, 'message' => 'Incorrect account or password!'];
        }
    }
}
