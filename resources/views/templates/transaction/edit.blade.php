@extends('templates.index')
@section('content')

<div class="container">
    <div class="col-md-6">
            {!! Form::model($tr, ['method' => 'PATCH','route' => ['transac.update', $tr->id]]) !!}
            <div class="form-group">
                <label for="biaya">Kategori</label>
                <select class="form-control fk_category" name="fk_category" >
                <option value=""> --Pilih-- </option>
                @foreach($ct as $caty)                
                    <option {!! ($caty->id == $tr->fk_category ? "selected=\"selected\"" : "") !!} value="{{ $caty->id }}" tipe="{{ $caty->tipe }}">{{ $caty->name }}</option>
                @endforeach    
                </select>
            </div>
            <option value=""> --Pilih-- </option>
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <input name="tipe" type="text" class="form-control tipe" readonly value="{{ $tr->tipe }}">
            </div>

            <div class="form-group">
                <label for="biaya">Biaya</label>
                <input name="nominal" type="text" class="form-control" value="{{$tr->nominal}}">
            </div>

              <div class="form-group">
                <label for="tgl">Tanggal Transaksi</label>
                <div class="input-group">
                    <input id="tg" name="t_trans" type="text" class="form-control"  readonly value="{{$tr->transaction_date}}">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="5">{{ $tr->keterangan}}</textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-default">
            </div>
            {!! Form::close() !!}
    </div>
</div>

@stop