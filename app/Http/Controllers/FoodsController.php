<?php

namespace App\Http\Controllers;
use App\Models\Food;
use App\Models\Category;

use Illuminate\Http\Request;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods=Food::all(); // SELECT* FROM foods;
        return view('foods.index',[
            'foods'=>$foods,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foods.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food=Food::create([
            'name'=>$request->input('name'),
            'count'=>$request->input('count'),
            'description'=>$request->input('description'),
        ]);
        $food->save(); //save to Database 
        return redirect('/foods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food=Food::find($id);
        $category=Category::find($food->category_id);
        // dd($food);
        $food->category=$category;
        return view('foods.show')->with('food',$food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food=Food::find($id);
        return view('foods.edit')->with('food',$food);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food=Food::where('id',$id)
        ->update([
            'name'=>$request->input('name'),
            'count'=>$request->input('count'),
            'description'=>$request->input('description'),
        ]);
        return redirect('/foods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food=Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
}
