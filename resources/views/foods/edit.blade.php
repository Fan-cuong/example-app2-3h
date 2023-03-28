@extends('layouts.app')
@section('content')
    <h1>Foods/ Edit page</h1>
    {{-- <img src="{{asset('storage/proxy1.png')}} " width="" height="" alt=""> --}}

    <form action="/foods/{{$food->id}}" method="post">
        @csrf
        @method('PUT')
        <input
            class="form-control"
            type="text"
            name="name"
            value="{{$food->name}} "
            placeholder="Enter food's name">
        <input
            class="form-control"
            type="text"
            name="description"
            value="{{$food->description}} "
            placeholder="Enter food's description">
        <input 
            class="form-control"
            type="text"
            name="count"
            value="{{$food->count}} "
            placeholder="Enter food's count">
        <button type="submit" class="btn btn-success">Update</button>
    </form>


@endsection