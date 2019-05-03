<?php

namespace App\Http\Controllers;

use App\Buku;

use Illuminate\Http\Request;

class BukuController extends Controller
{
  
    public function index()
    {
        //
    }


    public function create()
    {
        return view ('form');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required|integer',
            'pengarang'=>'required'
        ]);
        $buku = new Buku([
            'judul'=>$request->get ("judul"),
            'penerbit'=>$request->get ("penerbit"),
            'tahu_terbit'=>$request->get ("tahun_terbit"),
            'pengarang'=>$request->get ("pengarang")
        ]);
        $buku ->save();

        return redirect('/view')->with('Success','Data buku telah ditambahkan');
    }

    public function view()
    {      
        $buku = Buku::all();
        return view('view', compact('buku'));
    }

    public function edit()
    {
        $buku = Buku::find();
        return view('form', compact('buku'));
    }


    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy()
    {
        $buku = Buku::find();
        $buku->delete();

        return redirect('/');
    }
}
