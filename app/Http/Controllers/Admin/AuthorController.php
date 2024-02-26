<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        
       $authors = Author::limit(10)->get();
      return view('layout.author',compact('authors'));
    }


    public function create()
    {
      return view('layout.create');
    }

    public function store(Request $request)
    {
  
      $newauthor = new Author;

      $newauthor->slug = $request->input('slug');
      $newauthor->name = $request->input('name');
      $newauthor->bio = $request->input('bio');
      $newauthor->save();

      return redirect()->route('authors.view');

    }
}
