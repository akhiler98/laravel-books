@extends('layout/home')

@section('content-books')
 
    <h1>books</h1>

    <a href="{{route('books.create')}}">create new book</a><br>
    @foreach($books as $book)
    <li><a href="{{route('books.edit',['book_id' => $book->id])}}">Edit</a></li>
    <li>{{$book->slug}}</li>
    <li>{{$book->title}}</li>
    <li>{{$book->price}}</li>
    <img src="{{$book->image}}" alt=""><br><br>
    @endforeach
 
@endsection