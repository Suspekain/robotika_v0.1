<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller {
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
      $name = $request->input('name');
      $email = $request->input('email');
      $message = $request->message;

      Contact::insert(['name'=>$name,'email'=>$email,'message'=>$message]);
      return view('index');
  }
}
