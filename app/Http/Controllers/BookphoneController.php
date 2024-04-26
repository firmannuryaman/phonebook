<?php

namespace App\Http\Controllers;

use App\Models\Bookphone;
use Illuminate\Http\Request;

class BookphoneController extends Controller
{
    public function index()
    {
        $bookphone = Bookphone::all();
        return view('buku.bookphone', ['bookphone' => $bookphone]);
    }
    public function create()
    {
        return view('buku.bookphone_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|min:12|numeric',
            'alamat' => 'required',
        ]);
        Bookphone::create($request->all());
        return redirect()->route('bookphone');
        // // Bookphone::create([
        // //     'nama_kategori' => $request->nama_kategori,
        // //     'nama' => $request->nama,
        // //     'no_hp' => $request->no_hp,
        // //     'alamat' => $request->alamat,
        // // ]);
        // return redirect('/bookphone');
    }
    public function delete($id)
    {
        Bookphone::find($id)->delete();
        return redirect('/bookphone');
    }
    public function edit($id)
    {
        $bookphone = Bookphone::find($id);
        return view('buku.bookphone_edit', ['bookphone' => $bookphone]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|min:12|numeric',
            'alamat' => 'required',
        ]);
        Bookphone::find($id)->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);
        return redirect('/bookphone');
    }
    public function search(Request $request)
    {
        $bookphone = $request->input('cari');
        $bookphone = Bookphone::where('nama', 'like', "%" . $bookphone . "%")->paginate();

        return view('buku.bookphone', compact('bookphone'));
    }
}
