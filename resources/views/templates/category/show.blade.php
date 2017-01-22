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
                    <strong>Name: </strong> {{ $cat->name  }}
                </div>
                <div class="form-group">
                    <strong>Description: </strong> {{ $cat->description  }}
                </div>
                <div class="form-group">
                    <strong>Dibuat pada: </strong> {{ $cat->created_at  }}
                </div>
                
                <div class="form-group">
                    <a href="{{ url('category' )}}" class="btn btn-default">Kembali</a>
                </div>
            </div>
    </div>
</div>    
@endsection