<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use \App\Users;

class Hellocontroller extends controller {
    
    public function index(){
$users = Users::find(1);

//var_dump($users->users);
//      $users = DB::table('users')->get();
      return view('hello',['users'=>$users]);
   }
}
