@extends('templates.index') 
@section('content')
<div class="container">
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tambah Catatan</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                <label for="catatan">Nama Catatan</label>
                    <input name="catatan" type="text" class="form-control">
                </div>
                <div class="form-group">
                <label for="catatan">Keterangan</label>
                    <textarea class="form-control" name="" rows="4"></textarea>
                </div>
                <div class="form-group">
                <label for="catatan">Jenis</label>
                    <select name="" id="" class="form-control">
                        <option value="">Test</option>
                    </select>
                </div>
                 <div class="form-group">
                <button type="submit" class="btn btn-default">Simpan</button>
                <button type="reset" class="btn btn-default">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
       <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">Nama Catatan
                </a>
            </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="form-group">
                        <label for="">Name</label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group">
                        <label for="">Ket</label>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group">
                        <label for="">Jeni</label>
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
    </div>
    
</div>
@stop