<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    // public function about(){
    //     $name='Hoang';
    //     return view('about')->with('name',$name);
    // }
    public function about(){
        $names=array('a','b','c','d','e');
        return view('about',['names'=>$names,]);
    }

}
