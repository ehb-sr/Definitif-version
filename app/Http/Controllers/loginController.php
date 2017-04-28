<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class loginController extends BaseController
{

//    public function authenticate(Request $request)
//    {
//        if (Auth::attempt(['email' => $email, 'password' => $password])) {
//            // Authentication passed...
//            return redirect()->intended('dashboard');
//        }
//    }
//    public function login(Request $req)
//    {
//        $username = $req->input('username');
//        $password = $req->input('password');
//
//        $checkLogin = User::where(['username'=>$username,'password'=>$password])->get();
//        if(count($checkLogin)  >0)
//        {
//            return redirect('adminHome');
//        }
//        else
//        {
//            echo "Login Faield Wrong Data Passed";
//        }
//    }
//
//    public function logout(){
//        return redirect('login');
//
//    }
}

?>

