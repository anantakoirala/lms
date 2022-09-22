<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        return view('admin.login');
    }
    public function postLogin(Request $request){
        $this->validate($request, [
            'email'    => 'required',
            'password' => 'required',
        ]);
        $result=User::where('email',$request->email)->first();
        if($result){
            
            if(!\Hash::check($request->password, $result->password)){
                return back()->with('message','Invalid Username\Password');
            
            }else{
                if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                            
                            return redirect()->route('dashboard.index');
                       } else {
                           return back()->withInput()->withErrors(['email'=>'something is wrong!']);
                       }
            }
        }else{
            return back()->with('message','User Not found');
        }
    }
    public function Logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
