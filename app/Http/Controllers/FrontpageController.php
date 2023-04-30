<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FrontpageController extends Controller
{
    //
public function index(){
   $app_info = Info::find([1, 2]);
    return view('v1.welcome',['app_info'=>$app_info]);      
}

public function postLogin(Request $request){
    $validatedData = $request->validate([
    'email' => 'required|email|exists:users',
   'password'=> 'required|string|min:6',
   ]);

 $remember_me = $request->has('remember_token') ? true : false; //Still confirm how this works

 if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'active' => 1],  $remember_me )) {
     
$request->session()->regenerate();

 return redirect()->intended(route('dashboard.index'));
}else{
    return back()->withInput()->with('failed', 'Sorry! You have entered an invalid credentials');
   
}



}


}