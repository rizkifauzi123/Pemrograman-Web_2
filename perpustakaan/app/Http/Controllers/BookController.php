<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//import model Book
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('pinjaman.book.index',[
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pinjaman.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input 
        $validated = $request->validate([
            'title' => 'required|min:2|max:24',
            'isbn' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Book::create($validated);
        return redirect('/tampilan/book');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          // Mendapatkan data berdasarkan ID 
          $book = Book::find($id);
          return view('pinjaman.book.show', [
              'book' => $book
          ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mendapatkan data berdasarkan ID 
        $book = Book::find($id);
        return view('pinjaman.book.edit', [
            'book' => $book
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id); 

        // validasi form input
        $validated = $request->validate([
            'title'=> 'required|min:2|max:24',
            'isbn' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        //update data

        $book->title = $request->input('title');
        $book->isbn = $request->input('isbn');
        $book->stok = $request->input('stok');
        $book->save();

        return redirect('/tampilan/book')->with('success', 'Data Berhasil di Perbaharui!');
        


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // mencari data berdasarkan ID
        $book = Book::find($id);

        // Hapus data berdasarkan ID

        $book->delete();

        return redirect('/tampilan/book');
    }
}
