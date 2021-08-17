@extends('layouts.main')

@section('title', "Equipos por Empleado")

@section('section','Equipos por Empleado')

@section('level','Recursos')

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de {{ $model }} de {{ $employee->fullname }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Identificación</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $equipmentEmployee->idcard }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre Completo</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $employee->fullname }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Número de Serie</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $equipmentEmployee->sn }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha de Entrega</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $equipmentEmployee->delivery_date }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Entregado Por</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $equipmentEmployee->delivery_user }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha de Devolución</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $equipmentEmployee->return_date }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recibido Por</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $equipmentEmployee->return_user }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Observaciones</label>
                            <div class="col-sm-10">
                                <textarea type="text" readonly class="form-control">{{ $equipmentEmployee->observation }}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        @if(empty($equipmentEmployee->return_user))
                            <a class="btn btn-success" href=" {{ route('equipmentEmployees.edit', $equipmentEmployee->id) }} ">Editar</a>
                        @endif
                        <a class="btn btn-info" href=" {{ route('equipmentEmployees.index', $employee) }} ">Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection