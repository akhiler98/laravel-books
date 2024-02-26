@extends('layout/home')

@section('form')
 
    <h1>create new author</h1>
    <form action="{{route('authors.store')}}" method="POST">
        @csrf

        <label for="">slug</label><br>
        <input type="text" name="slug"><br><br><br>

        <label for="">name</label><br>
        <input type="text" name="name"><br><br><br>

        <label for="">bio</label><br>
        <input type="text" name="bio"><br><br><br>

        <button type="submit">submit</button>
    </form>


   
 
@endsection