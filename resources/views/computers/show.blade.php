@extends('layouts.main')

@section('title', "Computadoras")

@section('section','Computadoras')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('equipments.index')}}"> Hardware </a></li>
        <li class="active">Detalles</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            @foreach ($computers as $computer)
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ $computer->type }} {{ $computer->serial }}</strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Número de Serie</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->serial }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->brand }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Modelo</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->model }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->provider }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Código de Inventario</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->inventory }}">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sistema Operativo</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->os }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hostname</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->hostname }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Memoria</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->ram }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Disco Duro</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->hd }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Asignado a</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $actualUser }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ubicado en</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $computer->storedin }}">
                            </div>
                        </div>
    

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-success btn-sm" href="{{ route('computers.edit', $computer->serial) }}">Editar</a>
                        <a class="btn btn-info btn-sm" href="{{ route('equipments.index') }}">Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            @endforeach
            
            <!-- /.box -->
        </div>
    </section>
@endsection