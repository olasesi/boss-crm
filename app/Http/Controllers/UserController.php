<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
       
        $users = User::leftJoin('admins as a','a.id', '=', 'admin_id')->get();
        return response()->json($users);
    }


    public function create()
    {
        return view('v1.admin.createuser');
    }

    public function logoutUser(){

        Auth::logout();
        return redirect(route('frontpage.index'));
    }
}
