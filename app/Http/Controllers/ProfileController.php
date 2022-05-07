<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function __construct(){

$this ->middleware('auth');}
public function show()
{
    return view('home');
}
}