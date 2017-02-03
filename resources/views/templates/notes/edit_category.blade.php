@extends('templates.index')
@section('content')

<div class="container">
    <div class="col-md-6">
            {!! Form::model($c, ['method' => 'PATCH','route' => ['c_note.update', $c->id]]) !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{ $c->c_name }}" type="text" name="jenis_catatan" class="form-control">
            </div>
             
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="deskripsi" class="form-control" rows="3">{{ $c->desc  }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-default">
            </div>
            {!! Form::close() !!}
    </div>
</div>

@stop