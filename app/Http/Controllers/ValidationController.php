<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
  public function add()
  {
    return view('add');
  }
  public function store(Request $req)
  {
    $validatedData = $req -> validate([
      'name'    =>  'required|regex:/(^[A-Za-z ]+$)+/',
      'email'   =>  'required|email|unique:employees,email',
      'address' =>  'required',
      'contact' =>  'required|unique:employees,contact',
      'salary'  =>  'required|integer|between:5000,8000',
      'dob'     =>  'required|before:2014-12-12',
      'password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
      'confirm_password' => 'required|min:8|required_with:password|same:password'
    ]);
  }
}
