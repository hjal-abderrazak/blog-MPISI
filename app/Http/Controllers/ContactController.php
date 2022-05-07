<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function showView(Request $request)
  {

    return view('contact');
  }



  public function addContact(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:191',
      'phone' => 'alpha_num|nullable|min:8|max:30',
      'subject' => 'required|string|max:100',
      'message' => 'string|string|max:255'
    ]);

    DB::table('contacts')->insert([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'phone' => $request->input('phone'),
      'subject' => $request->input('subject'),
      'created_at' =>  date("Y-m-d H:i:s"),
      'message' => $request->input('message')
    ]);
    return view('contact');
  }
  public function showAllContacts()
  {
    $contacts = DB::table('contacts')->select('id', 'name', 'subject','message', 'created_at')->get();
    return view('admin.contacts', ['contacts' => $contacts]);
  }

  public function showContactByID(Request $request)
  {
    $contact = DB::table('contacts')->where('id', $request->input('id'))->first();
    return view(' contact_info', ['contact' => $contact]);
  }

  public function delete($id)
  {
    DB::table('contacts')->where('id', $id)->delete();
    return back();
  }
  public function detail($id)
  {
    $contact = DB::table('contacts')->where('id', $id)->first();
    return view('admin.contact_info')->with('contact', $contact);
  }



 /* public function __construct()
  {
   $this->middleware('admin');
  }*/

}
