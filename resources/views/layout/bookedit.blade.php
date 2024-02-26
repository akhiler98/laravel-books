@extends('layout/home')

@section('form-books-edit')
 
    <h1>Edit books</h1>
    <form action="{{route('books.update',['book_id' => $editbook->id])}}" method="POST">
        @method('PUT')
        @csrf

        <label for="">slug</label><br>
        <input type="text" name="slug"><br><br><br>

        <label for="">title</label><br>
        <input type="text" name="title"><br><br><br>

        <label for="">price</label><br>
        <input type="number" name="price"><br><br><br>

        <label for="">publication_date</label><br>
        <input type="date" name="publication_date"><br><br><br>

        <label for="">language</label><br>
        <input type="text" name="language"><br><br><br>

        <label for="">isbn</label><br>
        <input type="number" name="isbn"><br><br><br>

        <label for="">format</label><br>
        <input type="text" name="format"><br><br><br>

        <button type="submit">submit</button>
    </form>


   
 
@endsection