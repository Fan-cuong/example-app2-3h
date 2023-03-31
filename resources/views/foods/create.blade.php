@extends('layouts.app')
@section('content')
    <h1>This is Foods/ Create page</h1>
    <form action="/foods" method="post">
        @csrf
        <input class="form-control" type="text" name="name"  placeholder="Enter food's name">
        <input class="form-control" type="text" name="description" placeholder="Enter food's description">
        <input class="form-control" type="text" name="count" placeholder="Enter food's count">

        <label>Choose a categories:</label>
        <select name="categories">
            <option value="Vietnamese Foods"> Vietnamese Foods </option>
            <option value="Japanese Foods"> Japanese Foods </option>
            <option value="Chinese Foods"> Chinese Foods </option>
        </select>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection