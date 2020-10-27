<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    
    public function suma($num1,$num2){

 
  echo "la suma es ".($num1 + $num2);
    }

}
