@extends('layouts.app')
@section('content')
    <h1>This is about page</h1>
{{
    $x=10;
}}
@if ($x>2)
    <h3>x is greater than 2 </h3>
@elseif($x<10)
    <h3>x is less than 10</h3>
@else
    <h3>all condition are not match</h3>
@endif

{{-- @unless (empty($name))
    @endunless --}}
    
{{-- @if(!empty($name))
    <h3>it is not  !empty</h3>
@endif --}}

{{-- @empty(!$name)
    <h3>it is not  !$empty</h3>
@endempty

@empty($age)
    <h3>Age is empty</h3>
@endempty

@isset($name)
    <h3>name has been set</h3>
@endisset

@switch($name)
    @case('Hoang')
        <h3>This is Mr.Hoang</h3>
        @break
    @default
        <h3>No one has selected</h3>
@endswitch

@for($i=0;$i<5;$i++)
    <h3>i= {{$i}} </h3>
@endfor --}}

{{-- @foreach ($names as $eachName)
    <h3>eachname: {{$eachName}} </h3>
@endforeach --}}

{{$i=0}}
@while ($i<5)
    <h3>i= {{$i}}</h3>
    {{$i++}}
@endwhile

















@endsection