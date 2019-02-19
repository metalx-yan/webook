<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use PDF;
use App;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdf()
    {   
        $book_data = Book::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('books.pdf', compact('book_data')))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
    public function convert_book_data_to_html()
    {
        $book_data = Book::all();

        return view('books.pdf', compact('book_data','output'));
    }

    public function index()
    {
        $index = Book::all();

        return view('books.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = $request->validate([
            'judul' => 'required|max:20',
            'penerbit' => 'required|max:20',
            'pengarang' => 'required|max:20',
            'tahun' => 'required',
            'jenis' => 'required',
        ]);

        $a = Book::create($store);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = $request->validate([
            'judul' => 'required|max:20',
            'penerbit' => 'required|max:20',
            'pengarang' => 'required|max:20',
            'tahun' => 'required',
            'jenis' => 'required',
        ]);

        $update = Book::findOrFail($id);
        $update->judul = $request->judul;
        $update->penerbit = $request->penerbit;
        $update->pengarang = $request->pengarang;
        $update->tahun = $request->tahun;
        $update->jenis = $request->jenis;
        $update->save();

        return redirect()->route('books.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back();
    }
}
