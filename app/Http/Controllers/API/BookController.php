<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function books()
    {
        try {
            $books = Book::all();

            return response()->json([
                'message'   => 'success',
                'books'     => $books,
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Request failed'
            ], 401);
        }
    }

    public function create(Request $req)
    {
        $validated = $req->validated([
            'judul'     => 'required|max:255',
            'penulis'   => 'required',
            'tahun'     => 'required',
            'penerbit'  => 'required',
            'cover'     => 'image|file|max:2048'
        ]);

        if ($req->hasFile('cover')) {
            $extension = $req->file('cover')->extension();

            $filename = 'conver_buku_'.time().'.'.$extension;

            $req->file('cover')->storeAs(
                'public/cover_buku', $filename
            );

            $validated['cover'] = $filename;
        }

        Book::create($validated);

        return response()->json([
            'message'   => 'Buku berhasil ditambahkan',
            'book'      => $validated,
        ], 200);
    }
}
