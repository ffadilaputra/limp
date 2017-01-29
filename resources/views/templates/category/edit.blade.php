@extends('templates.index')
@section('content')

<div class="container">
    <div class="col-md-6">
            {!! Form::model($cat, ['method' => 'PATCH','route' => ['category.update', $cat->id]]) !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{ $cat->name }}" type="text" name="name" class="form-control">
            </div>
             <div class="form-group">
                <label for="tipe">Tipe</label>
                <select name="tipe" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="pemasukan" {!! ($cat->tipe == 'pemasukan' ? "selected=\"selected\"" : "") !!}>Pemasukan</option>
                    <option value="pengeluaran" {!! ($cat->tipe == 'pengeluaran' ? "selected=\"selected\"" : "") !!}>Pengeluaran</option>
                    <option value="hutang" {!! ($cat->tipe == 'hutang' ? "selected=\"selected\"" : "") !!}>Hutang</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3">{{ $cat->description  }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-default">
            </div>
            {!! Form::close() !!}
    </div>
</div>

@stop