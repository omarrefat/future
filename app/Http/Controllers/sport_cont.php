<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sport_cont extends Controller
{


    public function test(){
    	
    $obj = new \stdClass();

    $obj->name = 'omar gad';
    $obj->id = '1';


    	return view('test',compact('obj'));
    }
}
