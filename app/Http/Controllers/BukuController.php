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
            'tahu_terbit'=>$request->get ("tahu_terbit"),
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

public function edit($id)
{
  $buku = Buku::find($id);
  return view('form', compact('buku'));
}
public function update(Request $request, $id)
{
  $request->validate([
    'judul'=>'required',
    'penerbit'=>'required',
    'tahu_terbit'=>'required|integer',
    'pengarang'=>'required'
  ]);
  $buku = Buku::find($id);
  $buku->judul = $request->get('judul');
  $buku->penerbit = $request->get('penerbit');
  $buku->tahu_terbit = $request->get('tahu_terbit');
  $buku->pengarang = $request->get('pengarang');
  $buku->save();
  // dd($request);
  return redirect('/view')->with('Success','Data buku telah diperbarui');
}

}
