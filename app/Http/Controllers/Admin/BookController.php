<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::limit(10)->get();
      return view('layout.book',compact('books'));
    }
    public function create()
    {
      return view('layout.createbook');
    }

    public function store(Request $request)
    {
      $newbook = new Book;
      $newbook->slug = $request->input('slug');
      $newbook->title = $request->input('title');
      $newbook->price = $request->input('price');
      $newbook->publication_date = $request->input('publication_date');
      $newbook->language = $request->input('language');
      $newbook->isbn = $request->input('isbn');
      $newbook->format = $request->input('format');
      $newbook->save();

      return redirect()->route('books.view');
    }

    public function edit($book_id)
    {
       $editbook = Book::findOrFail($book_id);
       return view('layout.bookedit',compact('editbook'));
    }

    public function update(Request $request,$book_id)
    {
       $updatebook = Book::findOrFail($book_id);

       
       $updatebook->slug = $request->input('slug');
       $updatebook->title = $request->input('title');
       $updatebook->price = $request->input('price');
       $updatebook->publication_date = $request->input('publication_date');
       $updatebook->language = $request->input('language');
       $updatebook->isbn = $request->input('isbn');
       $updatebook->format = $request->input('format');
       $updatebook->save();

       return redirect()->route('books.view');
       
    }

}
