<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\models\{order, role};
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUser()
    {
        $data['qty_order'] = count(order::all());
        $data['users'] = DB::table('users')
                            ->join('roles', 'users.role_id', '=', 'roles.id')
                            ->select('users.*', 'roles.uid')
                            ->get();
        return view('admin.user.index', $data);
    }

    public function getEditUser($id)
    {
        $data['qty_order'] = count(order::all());
        $data['user'] = User::find($id);
        $data['roles'] = role::all();
        return view('admin.user.edit', $data);
    }

    public function postEditUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('admin/user')->with('success', 'Update successful!');
    }

    public function getDeleteUser($id)
    {
        User::destroy($id);
        return back()->with('success', 'Delete successfully!');
    }
}
