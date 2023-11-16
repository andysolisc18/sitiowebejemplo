<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class temaController extends Controller
{
  public function temaUno(){
    return view('temas/bullying');
  }  


  public function temaDos(){
    return view('temas/suicidio');
  } 
}
