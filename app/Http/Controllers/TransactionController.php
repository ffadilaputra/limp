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
        $get_month = Carbon::now()->month;
        $now = Carbon::today()->formatLocalized('%d %B %Y');

        $total_peng = DB::table('tb_transaction')
                   ->where('tipe','pengeluaran')
                   ->sum('nominal');

        $total_pem = DB::table('tb_transaction')
                   ->where('tipe','pemasukan')
                   ->sum('nominal');                   

        $total_bln = DB::table('tb_transaction')
                   ->where('tipe','pengeluaran')
                   ->whereMonth('transaction_date',$get_month)
                   ->sum('nominal');

        $total_pem_bln = DB::table('tb_transaction')
                   ->where('tipe','pemasukan')
                   ->whereMonth('transaction_date',$get_month)
                   ->sum('nominal');                              

        $trs = DB::table('tb_transaction')
                 ->leftJoin('tb_category','tb_transaction.fk_category','=','tb_category.id')
                 ->select('tb_transaction.*','tb_category.name')
                 ->get();
        return view('templates.transaction.index',compact('trs','now','total_peng','total_bln','total_pem_bln','total_pem'));         
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
            't_trans' => 'required',
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
}
