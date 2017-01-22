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