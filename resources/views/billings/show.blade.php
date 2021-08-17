@extends('layouts.main')

@section('title', "Facturas")

@section('section','Facturas')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('billings.index')}}"> Facturas </a></li>
        <li class="active">Detalles</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ $billing->number }}</strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ date('Y/m/d', strtotime($billing->date)) }}">
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label">Número</label>
                                <div class="col-sm-10">
                                    <input disabled class="form-control" value="{{ $billing->number }}">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $billing->provider}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cuenta</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $billing->account }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Valor</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $billing->value }}">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-success btn-sm" href=" {{ route('billings.edit', $billing) }} ">Editar</a>
                        <a class="btn btn-info btn-sm" href=" {{ route('billings.index') }} ">Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection