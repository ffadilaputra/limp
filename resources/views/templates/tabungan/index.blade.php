@extends('templates.index') 
@section('content')

        <div class="container">
            <div class="col-md-6">
                    @if(count($errors) > 0)
                            @include('templates.common.errors')
                    @endif
                    @if ($message = Session::get('alert-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> {{ $message }}
                    </div>
                    @endif
                <div class="panel panel-default">
                     <div class="panel-heading">
                         <div class="form-group">
                            <h3 class="panel-title">Tabungan</h3>  
                         </div>
                         <div class="row">
                            {!! Form::open(['route' => 'tb.store']) !!}
                            <div class="col-sm-8">
                                <input name="nominal" type="number" class="form-control">
                            </div>
                             <div class="col-sm-4">
                              <button type="submit" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Setor Tabungan</button>
                            </div>
                            {!! Form::close() !!}
                         </div>
                    </div>
                    <ul class="list-group">
                        @foreach($list as $data)
                        <li class="list-group-item">
                            <a href="tb/del/{{ $data->id }}" onclick="return confirm('Anda yakin akan menghapus data ?');" class="btn btn-sm btn-default"><i class="fa fa-remove"></i></a>
                           Rp.{{ $data->nominal }}
                        <span class="badge">{{ $data->tgl_menabung }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <center>{{ $list->links() }}</center>
                </div>
            </div>
            <div class="col-md-6">
                Tarik Tabungan
            </div>
        </div>

@stop