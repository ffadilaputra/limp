<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NoteModel;

class NotesController extends Controller
{
    public function index()
    {   
        $n = DB::table('tb_note')
                 ->leftJoin('tb_category_notes','tb_note.fk_c_note','=','tb_category_notes.id')
                 ->select('tb_note.*','tb_category_notes.c_name')
                 ->get();
        
        $c = DB::table('tb_category_notes')->get();
        return view('templates.notes.index',compact('n','c'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $n = new NoteModel();
        $n->note_name = $request->catatan;
        $n->note_desc = $request->des;
        $n->fk_c_note = $request->c_cat;
        $n->save();
        return redirect()->route('notes.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
    }
}
