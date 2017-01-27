@extends('templates.index')
@section('content')

<div class="container">
    <div class="panel panel-default">
            <div class="panel-heading">
                Detail Pengeluaran Anda
            </div>
            <div class="panel-body">
                <div class="pull-right">    
                </div>
                <div class="form-group">
                    <strong>Name : </strong> {{ $peng->nama  }}
                </div>
                <div class="form-group">
                    <strong>Tanggal Pengeluaran : </strong> {{ $peng->tgl_pengeluaran  }}
                </div>
                <div class="form-group">
                    <strong>Nominal : </strong> {{ $peng->nominal  }}
                </div>
                <div class="form-group">
                    <strong>Jenis : </strong> {{ $peng->name  }}
                </div>
                <div class="form-group">
                    <strong>Keterangan : </strong> {{ $peng->keterangan  }}
                </div>
                <div class="form-group">
                    <a href="{{ url('pengeluaran' )}}" class="btn btn-default">Kembali</a>
                </div>
            </div>
    </div>
</div>    
@endsection