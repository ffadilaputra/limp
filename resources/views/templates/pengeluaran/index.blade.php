@extends('templates.index') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-18">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Data Pegeluaran Anda</h4>
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
                        <a href="{{ route('pengeluaran.create' )}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Pengeluaran</a>
                    </div>
                    <table id="main" class="table table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Nama</td>
                                <td>Tanggal Pengeluaran</td>
                                <td>Nominal</td>
                                <td>Jenis</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?> 
                            @foreach($peng as $mamam )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $mamam->nama }}</td>
                                <td>{{ $mamam->tgl_pengeluaran }}</td>
                                <td>{{ $mamam->nominal }}</td>
                                <td>{{ $mamam->name }}</td>
                                <td>
                                    <a class="btn btn-default" href="{{ route('pengeluaran.show', $mamam->id) }}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-default" href="{{ route('pengeluaran.edit', $mamam->id) }}"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-default" href="/pengeluaran/del/{{ $mamam->id }}" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop