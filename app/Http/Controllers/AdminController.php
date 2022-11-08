<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function auth(Request $request){
        $email= $request->post('email');
        $password= $request->post('password');

        $result=Admin::where(['email'=>$email,'password'=>$password])->get();
        if(isset($result['0']->id)){
            $request->session()->put('ADMIN-LOGIN',true);
            $request->session()->put('ADMIN-ID',$result['0']->id);
            return redirect('admin/dashboard');
        }else{
            $request->session()->flash('error','Please Enter valid login details!'); 
            return redirect('admin');
        }
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
