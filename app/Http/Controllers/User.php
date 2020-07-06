<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
       function form(Request $req){
           return $req->input();
       }
       function sample(){
           return view('welcome');
       }
    }
