<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoryModel;

class CategoryController extends Controller
{
    
    public function create()
    {
        return view('templates.category.add');
    }

    public function edit($id){
        $cat = CategoryModel::find($id);
        return view('templates.category.edit',compact('cat'));
    }

    public function update(Request $request,$id){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        CategoryModel::find($id)->update($request->all());
        return redirect('/category')->with('success', 'Data berhasil diubah!');
    }

    public function save(Request $request){

        //Validasi
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $cat = new CategoryModel();
        $cat->name = $request->name;
        $cat->description = $request->description;
        $cat->save();
        return redirect('/category')->with('success', 'Data berhasil disimpan!');
    }

    public function show($id){
        $cat = CategoryModel::find($id);
        return view('templates.category.show',compact('cat'));
    }

    public function read()
    {
        $data = CategoryModel::orderBy('id','ASC')->paginate(10);
        return view('templates.category.view')->with('data',$data);
    }

    public function delete($id){
        $data = CategoryModel::find($id);
        $data->delete();
        return redirect('/category')->with('success', 'Data Berhasil Dihapus!');
    }
}
