@extends('layouts.app')
@section('content')
    <h1>This is Foods/ Show page</h1>
    <img src="{{asset('storage/proxy1.png')}} " width="" height="" alt="">


   
    
    <h3>Name : {{$food->name}} </h3>
    <h3>Count : {{$food->count}} </h3>
    <h3>Detail : {{$food->description}} </h3>
    <h3>Category : {{$food->category_id}} </h3>
    <h3>Category name : {{$food->category->name}} </h3>



@endsection