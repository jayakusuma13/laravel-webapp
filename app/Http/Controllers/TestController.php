<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function displayName($name){
      return 'Ah, your name is '.$name;
    }

    public function index(){
      $users = DB::table('users')->get();
      return view('usersindex',['users'=>$users]);

    }
}
