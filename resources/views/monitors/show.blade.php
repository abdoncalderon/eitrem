@extends('layouts.main')

@section('title', "Monitores")

@section('section','Monitores')

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
            @foreach ($monitors as $monitor)
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ $monitor->type }} {{ $monitor->serial }}</strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Número de Serie</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $monitor->serial }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $monitor->brand }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Modelo</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $monitor->model }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $monitor->provider }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Código de Inventario</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $monitor->inventory }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tamaño</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $monitor->size }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">HDMI</label>
                            <div class="col-sm-10">
                                @if($monitor->hdmi==1)
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" >
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">VGA</label>
                            <div class="col-sm-10">
                                    @if($monitor->vga==1)
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" >
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Display Port</label>
                            <div class="col-sm-10">
                                    @if($monitor->dp==1)
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" >
                                @endif
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
                                <input disabled class="form-control" value="{{ $monitor->storedin }}">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-success btn-sm" href="{{ route('monitors.edit', $monitor->serial) }}">Editar</a>
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