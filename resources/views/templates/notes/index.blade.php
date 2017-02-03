@extends('templates.index') 
@section('content')
<div class="container">
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tambah Catatan</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'notes.store']) !!}
                <div class="form-group">
                <label for="catatan">Nama Catatan</label>
                    <input name="catatan" type="text" class="form-control">
                </div>
                <div class="form-group">
                <label for="catatan">Keterangan</label>
                    <textarea name="des" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                <label for="catatan">Jenis</label>
                <select class="form-control" name="c_cat">
                    <option value="">--Pilih--</option>
                    @foreach($c as $caty)                
                        <option value="{{ $caty->id }}">{{ $caty->c_name }}</option>
                    @endforeach
                </select>      
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-default">Simpan</button>
                <button type="reset" class="btn btn-default">Batal</button>
                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
    <?php $i=1 ?>
        @foreach($n as $ns)
       <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse{{$ns->id}}">Notes {{ $i++ }}
                </a>
            </h4>
            </div>
            <div id="collapse{{$ns->id}}" class="panel-collapse collapse">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="form-group">
                        <label for="">Nama Catatan</label>
                        <p>{{$ns->note_name}}</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <p>{{$ns->note_desc}}</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group">
                        <label for="">Jenis Catatan</label>
                        <p>{{$ns->c_name}}</p>
                    </div>
                </li>
            </ul>
            <div class="panel-footer">
            <a href="#" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-default"><i class="fa fa-times-circle" aria-hidden="true"></i></i></a>
            </div>
            </div>
        </div>
        </div>
        @endforeach
    </div>
    
</div>
@stop