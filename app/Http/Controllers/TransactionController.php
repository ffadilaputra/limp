<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TransacModel;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index()
    {
        
        $trs = DB::table('tb_transaction')
                 ->leftJoin('tb_category','tb_transaction.fk_category','=','tb_category.id')
                 ->select('tb_transaction.*','tb_category.name')
                 ->get();
        return view('templates.transaction.index',compact('trs'));         
    }       

    public function create()
    {
        $cat = DB::table('tb_category')->get();
        return view('templates.transaction.add',['cat' => $cat]);

    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'fk_category' => 'required|not_in:-- Pilih --',
            'tipe' => 'required',
            'nominal' => 'required',
            'transaction_date' => 'required',
            'keterangan' => 'required',
        ]);

        $tr = new TransacModel();
        $tr->fk_category = $request->fk_category;
        $tr->tipe = $request->tipe;
        $tr->nominal = $request->nominal;
        $tr->transaction_date = $request->t_trans;
        $tr->keterangan = $request->keterangan;
        $tr->save();
        return redirect()->route('transac.index')->with('alert-success','Data Berhasil Disimpan');
    }

    public function show($id)
    {
        $tr = DB::table('tb_transaction')
                ->leftJoin('tb_category','tb_transaction.fk_category','=','tb_category.id')
                ->select('tb_transaction.*','tb_category.name')
                ->where('tb_transaction.id','=',$id)
                ->first();
        return view('templates.transaction.show',compact('tr'));        
    }

    public function edit($id)
    {
        $tr = TransacModel::findOrFail($id);
        $ct = DB::table('tb_category')->select('id','tipe','name')->get();
        return view('templates.transaction.edit',compact('tr','ct'));
    }

    public function update(Request $request, $id)
    {
        $tr = TransacModel::findOrFail($id);
        $tr->fk_category = $request->fk_category;
        $tr->tipe = $request->tipe;
        $tr->nominal = $request->nominal;
        $tr->transaction_date = $request->t_trans;
        $tr->keterangan = $request->keterangan;
        $tr->save();
        return redirect()->route('transac.index')->with('alert-success','Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $tr = TransacModel::findOrFail($id);
        $tr->delete();
        return redirect()->route('transac.index')->with('alert-success','Data Berhasil Dihapus');
    }

    public function sumByDay(){
        
    }

}
