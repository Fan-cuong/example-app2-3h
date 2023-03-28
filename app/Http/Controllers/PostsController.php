<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        // $posts=DB::select("SELECT*FROM posts WHERE id=?;", ['id'=>1]);
        // $posts=DB::select("SELECT*FROM posts WHERE id=9");
        // $posts=DB::select("SELECT*FROM posts;");
        // $posts=DB::select("SELECT*FROM posts WHERE id=:id", [
            //     'id'=>3
            // ]);
        // $posts=DB::table("posts")->where ("id",1)
        //                         ->select('title')
        //                         ->get();
        // $posts=DB::table("posts")->where ("created_at",">",now()->subDay())
        //                         // ->select('title')
        //                         ->get();
        // $posts=DB::table("posts")->where ("created_at",">",now()->subDay())
        //                         ->orwhere('id','>',0)
        //                         ->get();
        // $posts=DB::table("posts")->whereBetween ("id",[1,3])
        //                         ->get();
        // $posts=DB::table("posts")->whereNotNull ("body")
        //                         ->get();
        // $posts=DB::table("posts")->whereNotNull ("body")
        //                         ->orderBy('id','desc')
        //                         ->get();
        $posts=DB::table("posts")
                                // ->max('id');
                                // ->insert([
                                //     'title'=>'haha',
                                //     'body'=>'A new post haha'
                                // ]);

                                // ->where('id','=',5)
                                // ->update([
                                //     'title'=>'haha title',
                                //     'body'=>'haha title body update'
                                // ]);
                                ->where('id','=',6)
                                ->delete();

                                // ->sum('id');
                                // ->avg('id');
                                // ->min('id');
                                // ->find(3);
                                // ->count();
                                // ->get();
        dd($posts);
        // return view('posts.index');
    }
}
