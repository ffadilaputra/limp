@extends('templates.index')
@section('content')
<div class="container">
    <div class="col-md-9">
    @if ($message = Session::get('alert-success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}
        </div>
    @endif
    <div class="form-group">
        <a href="{{ route('category.create' )}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Kategori</a>      
    </div>
        <table id="main" class="table table-bordered">
        <thead>  
            <tr>
            <td>#</td>
            <td>Nama</td>
            <td>Keterangan</td>
            <td>Opsi</td>
            </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>   
            @foreach($cat as $mamam )
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $mamam->name }}</td>
                <td>{{ $mamam->description }}</td>
                <td>                    
                    <a class="btn btn-default" href ="{{ route('category.show', $mamam->id) }}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-default" href ="{{ route('category.edit', $mamam->id) }}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-default" href ="/category/del/{{ $mamam->id }}" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></a>
                </td>
                </tr>
            @endforeach
        </tbody>    
        </table>
    </div>
</div>
@stop