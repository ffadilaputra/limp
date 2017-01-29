<?php

namespace App\Http\Controllers;

use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;
use App\CategoryModel;

class CategoryController extends Controller
{

    public function index()
    {
        //
        $cat = CategoryModel::all();
        return view('templates.category.view',compact('cat'));
    }


    public function create()
    {
        //
        return view('templates.category.add');
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'tipe' => 'required|not_in:-- Pilih --',
            'description' => 'required',
        ]);

        $cat = new CategoryModel();
        $cat->name = $request->name;
        $cat->tipe = $request->tipe;
        $cat->description = $request->description;
        $cat->save();
        return redirect()->route('category.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }


    public function show($id)
    {
        $cat = CategoryModel::findorFail($id);
        return view('templates.category.show',compact('cat'));
    }


    public function edit($id)
    {
        //
        $cat = CategoryModel::findOrFail($id);
        return view('templates.category.edit',compact('cat'));
    }


    public function update(Request $request, $id)
    {
        $cat = CategoryModel::findOrFail($id);
        $cat->name = $request->name;
        $cat->tipe = $request->tipe;
        $cat->description = $request->description;
        $cat->save();
        return redirect()->route('category.index')->with('alert-success', 'Data Berhasil Diubah.');
    }


    public function destroy($id)
    {
        //
        $cat = CategoryModel::findOrFail($id);
        $cat->delete();
        return redirect()->route('category.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
