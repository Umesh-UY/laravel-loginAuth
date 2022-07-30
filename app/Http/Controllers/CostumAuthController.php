<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User as AppUser;
use Session;

class CostumAuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function registration(){
        return view('register');
    }
    public function registeruser(Request $request){
        $request ->validate([
            'name'=>'required|unique:users,user_name|regex:/^[a-zA-ZÑñ\s]+$/',
            'email'=>'required|unique:users,user_email|email|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required|min:8'
        ]);
        $user = new AppUser();
        $user->user_name = $request->name;
        $user->user_email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return redirect('login')->with('success','Successfull account created and now you can login ');
        }
        else{
            return back()->with('fail','Somthing wrong');
        }

    }
    public function loginuser(Request $req){
        $req ->validate([
            'email'=>'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required'
        ]);
        $user = AppUser::where('user_email','=',$req->email)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                $req->session()->put('user',$user->user_name);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password does no match.');
            }
        }else{
            return back()->with('fail','Email id does no exist.');
        }
        echo "login";
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function logout(){
        if(session()->has('user')){
            session()->pull('user');
            return redirect('login');
        }
    }
}
