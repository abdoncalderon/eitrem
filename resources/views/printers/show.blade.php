@extends('layouts.main')

@section('title', "Impresoras")

@section('section','Impresoras')

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
            @foreach ($printers as $printer)
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ $printer->type }} {{ $printer->serial }}</strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Número de Serie</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $printer->serial }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $printer->brand }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Modelo</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $printer->model }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $printer->provider }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Código de Inventario</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $printer->inventory }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Dirección IP</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $printer->ip }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ubicado en</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $printer->office }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Negro</label>
                            <div class="col-sm-10">
                                @if($printer->black==1)
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" >
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                                    @if($printer->color==1)
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" >
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">USBt</label>
                            <div class="col-sm-10">
                                    @if($printer->usb==1)
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" >
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ethernet</label>
                            <div class="col-sm-10">
                                    @if($printer->ethernet==1)
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" >
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Wifi</label>
                            <div class="col-sm-10">
                                    @if($printer->wifi==1)
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" disabled class="form-control" >
                                @endif
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-success btn-sm" href="{{ route('printers.edit', $printer->serial) }}">Editar</a>
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