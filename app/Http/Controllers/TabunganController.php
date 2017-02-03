<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TabunganModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;


class TabunganController extends Controller
{

    public function index()
    {
        $list = DB::table('tb_tabungan')->paginate(5);
        return view('templates.tabungan.index',compact('list'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nominal' => 'required',
        ]); 

       $nabung = new TabunganModel();
       $get_month = Carbon::now();
       $tots = DB::table('tb_tabungan')->sum('nominal');
       $nabung->nominal = $request->nominal;
       $nabung->tgl_menabung = $get_month;
       $nabung->saldo = $request->nominal+$tots;
       $nabung->save();
       return redirect()->route('tb.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    public function destroy($id)
    {
        $tr = TabunganModel::findOrFail($id);
        $tr->delete();
        return redirect()->route('tb.index')->with('alert-success','Data Berhasil Dihapus');
    }
}
