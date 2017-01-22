@extends('templates.index')
@section('content')
<div class="container">
    <div class="col-md-9">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}
        </div>
    @endif
    <div class="form-group">
        <a href="{{ url('category/add' )}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Kategori</a>      
    </div>
        <table class="table table-bordered">
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
            @foreach($data as $mamam )
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $mamam->name }}</td>
                <td>{{ $mamam->description }}</td>
                <td>
                    <a class="btn btn-default" href="/category/{{ $mamam->id }}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-default" href ="#"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-default" href ="/category/delete/{{ $mamam->id }}"><i class="fa fa-trash"></i></a>
                </td>
                </tr>
            @endforeach
        </tbody>    
        </table>
    </div>
</div>
@stop