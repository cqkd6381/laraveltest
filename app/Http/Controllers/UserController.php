<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function index(){

    	$users = DB::table('users')->paginate(5);
    	return view('user.index',['users'=>$users]);

    }
}
