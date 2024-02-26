@extends('layout/home')

@section('content')
 
    <h1>Author</h1>


    @foreach($authors as $author)
    <li>{{$author->slug}}</li>
    <li>{{$author->name}}</li><br><br>
    @endforeach
 
@endsection
   
