<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function showUsers(Request $request)
  {
    $users = DB::select('select * from users ');

    return view('users', ['users'=>$users]);
    
  }

  public function detail($id)
  {
    $user = DB::table('users')->where('id', $id)->first();
    return view('user_info')->with('users', $user);
  }

 /* public function __construct()
  {
   $this->middleware('admin');
  }*/


}