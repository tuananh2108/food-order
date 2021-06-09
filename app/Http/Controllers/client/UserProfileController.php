<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\models\order;
use Auth;
use DB;

class UserProfileController extends Controller
{
    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
