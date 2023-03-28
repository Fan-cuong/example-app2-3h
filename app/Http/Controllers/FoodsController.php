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
        //hien tat cac ra man hinh tat ca
        $foods=Food::all(); // SELECT* FROM foods;
        // $foods=Food::where('name','=','sushi')
                                                // ->get();
        // dd($foods); 
        return view('foods.index',[
            'foods'=>$foods,
        ]);
    // // }
        // $food=Food::where('name','=','food2')
        //                                         ->firstOrFail();
        // return view('foods.index',[
        //     'food'=>$food,
        // ]);
        // return view('foods.index');
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
        // dd('this is a store');
        // cach 1
        // $food = new Food();
        // $food->name =        $request->input('name'); 
        // $food->count =       $request->input('count'); 
        // $food->description = $request->input('description');

        // cach 2:
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
        // dd('this is a new resource'.$id);
        $food=Food::find($id);
        $category=Category::find($food->category_id);
        dd($food);
        // dd($category);
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
        // dd($id);
        // $food=Food::find($id)->first();
        $food=Food::find($id);
        // dd($food);
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
        // dd($id);
        return redirect('/foods');
    }
}
