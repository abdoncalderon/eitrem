@extends('layouts.main')

@section('title', "Personas")

@section('section','Empleados')

@section('level','Configuración')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('employees.index')}}"> Personas </a></li>
        <li class="active">Detalles</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de {{ $employee->name }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Identificación</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $employee->idcard }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre Completo</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $employee->fullname }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Oficina</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $employee->office }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Area</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $employee->sector }}">
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">Cargo</label>
                                <div class="col-sm-10">
                                    <input disabled class="form-control" value="{{ $employee->function }}">
                                </div>
                            </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-success" href=" {{ route('employees.edit', $employee) }} ">Editar</a>
                        <a class="btn btn-info" href=" {{ route('employees.index') }} ">Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection