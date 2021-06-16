<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function validation(Request $req){
       // echo "UserController";
      // return $req->input();
      $req->validate([
          'username'=> 'required',
          'password'=> 'required',
          'usermail'=> 'required'
      ]);
      $dat =$req->input('username');
      $req ->session()->flash('user',$data);
    }
}
