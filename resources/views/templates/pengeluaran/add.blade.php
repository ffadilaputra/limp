@extends('templates.index')
@section('content')

<div class="container">
    <div class="col-md-6">
            {!! Form::open(['route' => 'pengeluaran.store']) !!}
            <div class="form-group">
                <label for="name">Nama </label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="tgl">Tanggal Pengeluaran</label>
                <div class="input-group">
                    <input id="tg" name="tgl_pengeluaran" type="text" class="form-control"  readonly>
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Biaya</label>
                <input type="text" name="nominal" class="form-control">
            </div>

            <div class="form-group">
                <label for="biaya">Kategori</label>
                
                <select class="form-control" name="fk_category" >
                @foreach($load_cat as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach    
                </select>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="5"></textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-default">
            </div>
            {!! Form::close() !!}
    </div>
</div>

@stop