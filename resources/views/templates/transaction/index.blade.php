@extends('templates.index') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Data Transaksi Anda</h4>
                </div>
                <div class="panel-body">
                    @if ($message = Session::get('alert-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> {{ $message }}
                    </div>
                    @endif
                    <div class="form-group">
                        <a href="{{ route('transac.create' )}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Transaksi</a>
                    </div>
                    <table id="main" class="table table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Kategori</td>
                                <td>Tipe</td>
                                <td>Nominal</td>
                                <td>Tanggal Pengeluaran</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?> 
                            @foreach($trs as $mamam )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $mamam->name }}</td>
                                <td>{{ $mamam->tipe }}</td>
                                <td>{{ $mamam->nominal }}</td>
                                <td>{{ $mamam->transaction_date	 }}</td>
                                <td>
                                    <a class="btn btn-default" href="{{ route('transac.show', $mamam->id) }}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-default" href="{{ route('transac.edit', $mamam->id) }}"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-default" href="/transac/d/{{ $mamam->id }}" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        <div class="panel panel-default">
                <div class="panel-body">
                    <strong>Tanggal Saat Ini</strong>
                    <br>
                    <strong>{{ $now }}</strong>
                </div>
            </div>
            <div class="list-group">
                <a class="list-group-item active">
                    <h4 class="list-group-item-heading">Total Pengeluaran</h4>
                    <p class="list-group-item-text">
                        <strong>Total : {{ $total_peng }}</strong><br>
                        <strong>Bulan Ini : {{ $total_bln }}</strong>
                    </p>
                </a>
            </div>
            <div class="list-group">
                <a class="list-group-item active">
                    <h4 class="list-group-item-heading">Total Pemasukan</h4>
                    <p class="list-group-item-text">
                        <strong>Total : {{ $total_pem }}</strong><br>
                        <strong>Bulan Ini : {{ $total_pem_bln }}</strong>
                    </p>
                </a>
            </div>   
        </div>
    </div>
</div>
@stop