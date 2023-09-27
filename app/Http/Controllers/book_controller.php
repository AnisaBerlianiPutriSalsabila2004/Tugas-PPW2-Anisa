<?php

namespace App\Http\Controllers;
use App\Models\book_models;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class book_controller extends Controller
{
    //
    public function index(){
        $data_buku =  book_models::all();
        $no = 0;
        $banyak_data = book_models::all()->count();
        $total_harga = DB::table('buku')->sum('harga');
        return view('buku.index', compact('data_buku', 'banyak_data', 'total_harga', 'no'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $req){
        $buku = new book_models;
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->harga = $req->harga;
        $buku->tanggal_terbit = $req->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id){
        $buku = book_models::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    public function edit($id){
        $buku = book_models::find($id);
        return view('buku.update', compact('buku'));
    }

    public function update(Request $req, $id){
        $buku = book_models::find($id);
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->harga = $req->harga;
        $buku->tanggal_terbit = $req->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }
}
