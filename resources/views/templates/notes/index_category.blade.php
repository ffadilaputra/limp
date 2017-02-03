@extends('templates.index')
@section('content')

<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
       <h4>Data Jenis Catatan</h4>
  </div>
  <div class="panel-body">
    <div class="col-md-11">
    @if ($message = Session::get('alert-success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}
        </div>
    @endif
     <div class="form-group">
        <a href="{{ route('c_note.create' )}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Jenis Catatan</a>      
    </div>
        <table id="main" class="table table-bordered">
        <thead>  
            <tr>
            <td>#</td>
            <td>Jenis Catatan</td>
            <td>Keterangan</td>
            <td>Opsi</td>
            </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>   
            @foreach($c as $mamam )
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $mamam->c_name }}</td>
                <td>{{ $mamam->desc }}</td>
                <td>                    
                    <a class="btn btn-default" href ="{{ route('c_note.show', $mamam->id) }}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-default" href ="{{ route('c_note.edit', $mamam->id) }}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-default" href ="c/del/{{ $mamam->id }}" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></a>
                </td>
                </tr>
            @endforeach
        </tbody>    
        </table>
    </div>
</div>
  </div>
</div>
    
@stop