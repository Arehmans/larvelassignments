<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mycustomcontroller extends Controller
{
   
   public function getcontact(){
	   
	   return view("contactus");
	   
   }
   
   
}
