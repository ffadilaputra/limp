@extends('templates.index')
@section('content')

<div class="container">
    <div class="panel panel-default">
            <div class="panel-heading">
                Detail Transaksi Anda
            </div>
            <div class="panel-body">
                <div class="pull-right">    
                </div>
                <div class="form-group">
                    <strong>Kategori Transaksi : </strong> {{ $tr->name  }}
                </div>
               <div class="form-group">
                    <strong>Tipe : </strong> {{ $tr->tipe  }}
                </div>
                <div class="form-group">
                    <strong>Nominal : </strong> {{ $tr->nominal  }}
                </div>
                 <div class="form-group">
                    <strong>Tanggal Transaksi : </strong> {{ $tr->transaction_date  }}
                </div>
                 <div class="form-group">
                    <strong>Keterangan : </strong> {{ $tr->keterangan  }}
                </div>
                <div class="form-group">
                    <a href="{{ url('transac' )}}" class="btn btn-default">Kembali</a>
                </div>
            </div>
    </div>
</div>    
@endsection