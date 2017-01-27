@extends('templates.index')
@section('content')

<div class="container">
    <div class="col-md-6">
            {!! Form::model($peng, ['method' => 'PATCH','route' => ['pengeluaran.update', $peng->id]]) !!}
            
            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{ $peng->nama }}" type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="tgl">Tanggal Pengeluaran</label>
                <div class="input-group">
                    <input value="{{ $peng->tgl_pengeluaran }}" id="tg" name="tgl_pengeluaran" type="text" class="form-control"  readonly>
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input value="{{ $peng->nominal }}" type="text" name="nominal" class="form-control">
            </div>

            <div class="form-group">
            <label for="biaya">Kategori</label>
            <input type="hidden" value="{{ $peng->id }}" name="get_fk">
                <select class="form-control" name="fk_category">
                    @foreach($load_cat as $cat)
                        <option value="{{ $cat->id }}" {!! ($cat->id == $peng->fk_category ? "selected=\"selected\"" : "") !!}>{{ $cat->name }}</option>
                    @endforeach    
                </select>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="5">{{ $peng->keterangan }}</textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-default">
            </div>



            {!! Form::close() !!}
    </div>
</div>

@stop