<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function createBook(){
        return view('createBook');
    }

    public function storeBook(Request $request){
        $request->validate([
            'bookTitle' => 'min:10'
        ]);

        Book::create([
            'bookTitle' => $request->bookTitle,
            'author' => $request->author,
            'releaseDate' => $request->releaseDate,
            'totalPage' => $request->totalPage
        ]);

        return redirect('/');
    }

    public function readBook(){
        $books = Book::all();

        return view('readbook', compact('books'));
    }

    public function readBookById($id){
        $book = Book::findOrfail($id);

        return view('readBookById', compact('book'));
    }
}
