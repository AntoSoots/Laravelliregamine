<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        if (request()->has('companies')){
            $users = DB::table('users')->where('company', '1')->paginate(15)->appends('companies', '1');

        } else if (request()->has('citizen')){
            $users = DB::table('users')->where('company', '0')->paginate(15)->appends('citizen', '0');

        } else if (request()->has('companyName')){
            $companyName = $_GET['companyName'];
            $users = DB::table('users')->where('companyName', 'like', "%".$companyName."%")->paginate(15)->appends('companyName', $companyName);

        } else if (request()->has('companyCode')){
            $companyCode = $_GET['companyCode'];
            $users = DB::table('users')->where('companyCode', 'like', "%".$companyCode."%")->paginate(15)->appends('companyCode', $companyCode);

        } else if (request()->has('name')){
            $name = $_GET['name'];
            $users = DB::table('users')->where('name', 'like', "%".$name."%")->paginate(15)->appends('name', $name);

        } else if (request()->has('age')){
            $age = $_GET['age'];
            $users = DB::table('users')->where('age', 'like', "%".$age."%")->paginate(15)->appends('age', $age);

        } else if (request()->has('email')){
            $email = $_GET['email'];
            $users = DB::table('users')->where('email', 'like', "%".$email."%")->paginate(15)->appends('email', $email);

        }else{
            $users = DB::table('users')->Paginate(15);
        }
        return view('home',['users'=>$users]);
    }
}
