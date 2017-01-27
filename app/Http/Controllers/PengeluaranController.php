<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengeluaranModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peng = DB::table('tb_pengeluaran')
                    ->leftJoin('tb_category','tb_pengeluaran.fk_category','=','tb_category.id')
                    ->select('tb_pengeluaran.*','tb_category.name')
                    ->get();    
        return view('templates.pengeluaran.index',compact('peng'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $load_cat = DB::table('tb_category')->get();
        return view('templates.pengeluaran.add', ['load_cat' => $load_cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $peng = new PengeluaranModel();
        $peng->nama = $request->name;
        $peng->tgl_pengeluaran = $request->tgl_pengeluaran;
        $peng->nominal = $request->nominal;
        $peng->fk_category = $request->fk_category;
        $peng->keterangan = $request->keterangan;
        $peng->save();
        return redirect()->route('pengeluaran.index')->with('alert-success','Data Berhasil Disimpan');
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
        $peng = DB::table('tb_pengeluaran')
                ->leftJoin('tb_category','tb_pengeluaran.fk_category','=','tb_category.id')
                ->select('tb_pengeluaran.*','tb_category.name')
                ->where('tb_pengeluaran.id','=',$id)
                ->first();
        return view('templates.pengeluaran.show',compact('peng'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $peng = PengeluaranModel::findOrFail($id);
        $load_cat = DB::table('tb_category')->select('id','name')->get();
        return view('templates.pengeluaran.edit', compact('peng','load_cat'));
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
        //
        $peng = PengeluaranModel::findOrFail($id);
        $peng->nama = $request->name;
        $peng->tgl_pengeluaran = $request->tgl_pengeluaran;
        $peng->nominal = $request->nominal;
        $peng->fk_category = $request->fk_category;
        $peng->keterangan = $request->keterangan;
        $peng->save();
        return redirect()->route('pengeluaran.index')->with('alert-success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $peng = PengeluaranModel::findOrFail($id);
        $peng->delete();
        return redirect()->route('pengeluaran.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
