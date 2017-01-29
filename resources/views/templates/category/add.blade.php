@extends('templates.index')
@section('content')

<div class="container">
    <div class="col-md-6">

    @if(count($errors) > 0)
        @include('templates.common.errors')
    @endif
            {!! Form::open(['route' => 'category.store']) !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <select name="tipe" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="pemasukan">Pemasukan</option>
                    <option value="pengeluaran">Pengeluaran</option>
                    <option value="hutang">Hutang</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Keterangan</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-default">
            </div>
            {!! Form::close() !!}
    </div>
</div>

@stop