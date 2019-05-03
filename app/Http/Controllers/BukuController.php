<?php

namespace App\Http\Controllers;

use App\Buku;

use Illuminate\Http\Request;

class BukuController extends Controller
{
  
    public function input()
    {
        return view ('form');
    }
    
    public function store(Request $request)
    {
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
  return view ('view', compact('buku'));
}
public function destroy($id)
{
  $buku = Buku::find($id);
  $buku->delete();
  return redirect('/view');
}
}
