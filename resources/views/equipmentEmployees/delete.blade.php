@extends('layouts.main')

@section('title', "Equipos por Empleado")

@section('section','Equipos por Empleado')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('employees.index')}}"> Personas </a></li>
        <li><a href="{{ route('equipmentEmployees.index', $employee)}}"> Equipos Asignados </a></li>
        <li class="active">Eliminar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Esta seguro de eliminar equipo {{ $model }} de {{ $employee->fullname }} ?</h3>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('equipmentEmployees.show', $equipmentEmployee)}}">
                    @csrf
                    @method('DELETE')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Identificación</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $equipmentEmployee->idcard }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre Completo</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $employee->fullname }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Número de Serie</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $equipmentEmployee->sn }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha de Entrega</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $equipmentEmployee->delivery_date }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Entregado Por</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $equipmentEmployee->delivery_user }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha de Devolución</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $equipmentEmployee->return_date }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recibido Por</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $equipmentEmployee->return_user }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Observaciones</label>
                            <div class="col-sm-10">
                                <input type="text" disabled class="form-control" value="{{ $equipmentEmployee->observation }}">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-danger pull-left btn-sm" style="margin: 0px 5px;">Si, Eliminar</button>
                        <a class="btn btn-info btn-sm" href="{{ route('equipmentEmployees.index', $employee) }}">No, Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection