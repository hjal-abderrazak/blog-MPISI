<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class courseController extends Controller
{  
  public function Showaddcourse(Request $request)
    {
      
      return view('add_course');
    }
      
  public function ShowCourse($id)
    {
      $course = DB::table('cours')->where('id', $id)->first();
      return view('course')->with('course', $course);
    }
   
    public function addCourse(Request $request)
    {
        
        DB::table('cours')->insert([
            'nom' => $request->input('nom'),
            'icone' => $request->input('icone'),
            'description' => $request->input('description'),
            'texte' => $request->input('texte'),
            'date_creation' => date("Y-m-d H:i:s"),
        ]);
        return redirect('/');
        
    }

    public function deleteCourse($id)
    {
      DB::table('cours')->where('id', $id)->delete();
      return redirect('/');
    }

   /* public function showViewCourse(Request $request)
    {
      
      return view('course');
    }*/

}