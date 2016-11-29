<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function index()
    {

    	$users = DB::table('users')->paginate(8);
    	return view('user.index',['users'=>$users]);

    }

    public function create()
    {
    	return view('user.create');
    }

    public function store(Request $request)
    {
        $res = DB::table('users')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]);
    	var_dump($res);

    }

    public function detail()
    {

    }

    public function delete($id)
    {
//        dd($id);
        DB::table('users')->where('id',$id)->delete();
    }
}
