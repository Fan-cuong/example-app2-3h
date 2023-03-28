@extends('layouts.app')
@section('content')
    <h1>This is Foods/ index page</h1>
    {{-- <img src="{{asset('storage/proxy1.png')}} " width="" height="" alt=""> --}}


    {{-- @foreach ($foods as $food)
            <h3>{{$food->name}} </h3>
            <h3>{{$food->description}} </h3>
            <h3>{{$food->count}} </h3>
    @endforeach --}}

    
    {{-- <h3>{{$food->name}} </h3>
    <h3>{{$food->description}} </h3>
    <h3>{{$food->count}} </h3> --}}



    
    <a href="foods/create" class="btn btn-primary btn-lg dis" role="button"> Create a new food </a>
    @foreach ($foods as $food)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold"><a href="/foods/{{$food->id}} "> {{ $food->name }}</a></div>

                <div class=""> {{ $food->description }}</div>
            </div>

            <span class="badge bg-primary rounded-pill ">{{ $food->count }}</span>


            <button class="btn btn-outline-secondary" type="button">
                <span class="spinner-border spinner-border-sm"></span>
                <a href="foods/{{ $food->id }}/edit"> Edit </a>
            </button>
           
          
            <form action="/foods/{{$food->id}}  " method="post">
                @csrf
                @method('delete')
                <button class="btn btn-outline-danger" type="submit">Delete</button>
            </form>
        </li>
        
    @endforeach
















@endsection