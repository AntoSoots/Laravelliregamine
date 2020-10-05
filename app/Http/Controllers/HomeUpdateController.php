<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class HomeUpdateController extends Controller {

    public function index()    {
        $users = DB::select('select * from users');
        return view('home',['users'=>$users]);
    }
    public function show($id) {
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('homeupdate',['users'=>$users]);
    }
    public function edit(Request $request,$id) {
        //$company = $request->input('company');
        $companyName = $request->input('companyName');
        $companyCode = $request->input('companyCode');
        $name = $request->input('name');
        $age = $request->input('age');
        $email = $request->input('email');

        DB::update('update users set companyName=?,companyCode=?,name=?,age=?,email=? where id = ?',[$companyName,$companyCode,$name,$age,$email,$id]);

        return redirect('home');
    }
    public function delete($id) {

        DB::delete('delete from users where id = ?',[$id]);

        return redirect('home');
    }
}
