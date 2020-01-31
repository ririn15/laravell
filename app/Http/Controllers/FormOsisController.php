<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\osis;

class FormOsisController extends Controller
{


 public function met1(){
    $osis = osis::all();
    return view ('form1',compact('form'));
}
public function met2($id){
    $osis = osis::all($id);
    return view ('form2',compact('form'));
}
}
