<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class LoginController extends Controller
{
    public function index(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

       
        if ($this->variables($request) === true) {
            $request->session()->put('username', $request->username);
            $session = $this->session($request);
            
            if(!empty($session)){
                return view('menu',compact('session'));
            }else{
                return view('index');
            }
           
        }else{

           return view('index');
        }
        
    }

    private function variables($request){
        $username = $request->username;
        $password = $request->password;
       
        $password = Hash::make($password);
        // $defaultPassword = "H&jxarMZHsLBH3*7";
        $defaultPassword = "1234";
        $checkLogin = Hash::check($defaultPassword, $password);
        return $checkLogin;
    }


    public function session(Request $request){
        $value = $request->session()->get('username');
        return $value;

    }
    
    public function destroySession(Request $request){
        $request->session()->forget('username');
        return redirect('/');
    }
    
}