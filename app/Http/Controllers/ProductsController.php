<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // public function index(){
    //     $title='Learning laravel 9';
    //     $x=1;$y=2;
    //     return view('home', compact('title','x','y'));
    // }

    //with chỉ truyền được 1 parameter
    // public function index(){
    //     $title='Learning laravel 9';
    //     return view('home')-> with('title',$title);
    // }

    //send an associative array , send directly
    // public function index(){
    //     $title='Learning laravel 9';
    //     $myphone=['name'=>'iphone 15',
    //                 'year'=>2023,
    //                 'status'=>true,
    // ];
    //     return view('home', [
    //         'myphone'=>$myphone
    //     ]);
    // }
        // public function detail($id) {
        //     // return "product ID =".$id;
        //     return view('products.index',[
        //         'product'=>[ 
        //             'name'=>'iphone 15',
        //             'year'=>2023,
        //             $id
        //         ]
        //     ]);
        // }
        // public function detail1($name) {
        //     $myphone=[
        //         'iphone 15'=>'iphone 15',
        //         'samsung'=> 'samsung'
        //     ];
        //     return view('products.index',[
        //         'product'=>$myphone[$name] 
        //         ??'unkown pruduct',
        //     ]);
        // }
        public function detail() {
            $myphone=[
                'iphone 15'=>'iphone 15',
                'samsung'=> 'samsung',
                'status'=>true
            ];
            print_r(route('products'));
            return view('products.index');
        }
        // public function detail($word,$id) {
        //      return "product name =".$word.
        //             ",product ID=" .$id;
        // }
        // public function detail($id) {
        //      return "product ID =".$id;
        // }















    public function about(){
        return view('products.index');
    }




















}
