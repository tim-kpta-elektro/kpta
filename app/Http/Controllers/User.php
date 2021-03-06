<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        /*else if (Session::get('level')==2){
            return view('dashboard');
        }*/else{
        	return view('dashboard');
        }
    }

    public function login(){
    	if(Session::get('login')){
            return redirect('dashboard');
        }else{
        	return view('login');
        }
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->orWhere('nim',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('nim',$data->nim);
                //Session::put('email',$data->email);
                Session::put('login',TRUE);
                Session::put('level',$data->level);
                return redirect('dashboard');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'nim' => 'required|min:4|unique:users',
            'email' => 'required|min:4|email|unique:users',
            'level' => 'required',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->nim = $request->nim;
        $data->email = $request->email;
        $data->level = $request->level;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}