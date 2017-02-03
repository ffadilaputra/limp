<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatNotesModel;

class CatNotesController extends Controller
{

    public function index()
    {
        $c = CatNotesModel::all();
        return view('templates.notes.index_category',compact('c'));
    }

    public function create()
    {
        return view('templates.notes.add_category');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'jenis_catatan' => 'required',
            'deskripsi' => 'required',
        ]);

        $ca = new CatNotesModel();
        $ca->c_name = $request->jenis_catatan;
        $ca->desc = $request->deskripsi;
        $ca->save();
        return redirect()->route('c_note.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    public function show($id)
    {
        $c = CatNotesModel::findorFail($id);
        return view('templates.notes.show_category',compact('c'));
    }

    public function edit($id)
    {
        $c = CatNotesModel::findOrFail($id);
        return view('templates.notes.edit_category',compact('c'));
    }

    public function update(Request $request, $id)
    {
        $ca = CatNotesModel::findOrFail($id);
        $ca->c_name = $request->jenis_catatan;
        $ca->desc = $request->deskripsi;
        $ca->save();
        return redirect()->route('c_note.index')->with('alert-success', 'Data Berhasil Diubah.');
    }

    public function destroy($id)
    {
        $c = CatNotesModel::findOrFail($id);
        $c->delete();
        return redirect()->route('c_note.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
