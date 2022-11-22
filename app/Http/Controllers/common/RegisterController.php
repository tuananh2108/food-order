<?php

namespace App\Http\Controllers\common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $params = $request->params;
        $user = new User;
        $user_old = User::where('email', $params['email'])->get();
        if(count($user_old) == 0){
            $user->name = $params['name'];
            $user->email = $params['email'];
            $user->contact = $params['contact'];
            $user->password = Hash::make($params['password']);
            if($params['password'] == $params['confirm-password']) {
                $user->save();
                return [ 'code' => '200', 'message' => 'Successful account registration!'];
            }
            else {
                return [ 'code' => '190', 'message' => 'Confirmation password does not match!'];
            }
        }
        else {
            return [ 'code' => '190', 'message' => 'Email exist!'];
        }
    }
}
