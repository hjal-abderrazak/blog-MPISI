<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WelcomeController extends Controller
{
    public function showView(Request $request)
    {
    
        $cours = DB::table('cours')->select('id','nom', 'icone','description')->get();
        return view('welcome',['cours' => $cours]);
    }

}