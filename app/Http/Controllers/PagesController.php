<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\contact;
use Session;

class PagesController extends Controller
{
    public function getIndex() {
      $posts= Post::orderBy('created_at','desc')->limit(3)->get();
      return view('pages.welcome')->withPosts($posts);
    }


    public function getContact()
    {
    return view('pages.contact');
    }

    public function storeContact(Request $request)
    {
      $this->validate($request , array(
         'contact_name' => 'required',
         'contact_email' => 'required|email',
         'contact_message' => 'required'
      ));
      $contact= new Contact;
      $contact->contact_name = $request->contact_name;
      $contact->contact_email = $request->contact_email;
      $contact->contact_message = $request->contact_message;

      $contact->save();
      Session::flash('success','Votre message a été bien envoyé.');
      return redirect('/');
    }
}
