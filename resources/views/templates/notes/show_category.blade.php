@extends('templates.index')
@section('content')

<div class="container">
    <div class="panel panel-default">
            <div class="panel-heading">
                Detail Kategori
            </div>
            <div class="panel-body">
                <div class="pull-right">    
                </div>
                <div class="form-group">
                    <strong>Jenis Catatan: </strong> {{ $c->c_name  }}
                </div>
                <div class="form-group">
                    <strong>Keterangan: </strong> {{ $c->desc  }}
                </div>
                
                <div class="form-group">
                    <a href="{{ url('c_note' )}}" class="btn btn-default">Kembali</a>
                </div>
            </div>
    </div>
</div>    
@endsection