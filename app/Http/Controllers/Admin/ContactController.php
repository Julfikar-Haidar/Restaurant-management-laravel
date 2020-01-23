<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Session;

class ContactController extends Controller
{
   
   public function index(){

   	$contact=Contact::all();

   	return view('admin.contact.index',compact('contact'));
   }
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.show',compact('contact'));
    }
    public function destroy($id)
    {
        Contact::find($id)->delete();
        Session::flash('success','Contact Message successfully deleted');
        return redirect()->back();
    }
}
