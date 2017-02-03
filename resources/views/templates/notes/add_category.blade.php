@extends('templates.index')
@section('content')

<div class="container">
    <div class="col-md-6">

    @if(count($errors) > 0)
        @include('templates.common.errors')
    @endif
            {!! Form::open(['route' => 'c_note.store']) !!}
            <div class="form-group">
                <label for="name">Jenis Catatan</label>
                <input type="text" name="jenis_catatan" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Keterangan</label>
                <textarea name="deskripsi" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-default">
            </div>
            {!! Form::close() !!}
    </div>
</div>

@stop