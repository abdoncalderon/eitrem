@extends('layouts.main')

@section('title', "Equipos por Empleado")

@section('section','Equipos por Empleado')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('employees.index')}}"> Personas </a></li>
        <li><a href="{{ route('equipmentEmployees.index', $employee)}}"> Equipos Asignados </a></li>
        <li class="active">Agregar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Agregar</strong></h3>
                </div>
                @if($errors->any())
                    <h4 style="color:red;margin: 0px 40px;"><strong>Errores:</strong></h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><strong>{{ $error }}</strong></li>
                        @endforeach
                    </ul>
                @endif
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('equipmentEmployees.store') }}">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Identificación</label>
                            <div class="col-sm-10" >
                                <input type="text" readonly class="form-control" name="idcard" value="{{ old('idcard',$employee->idcard) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10" >
                                <input type="text" readonly class="form-control" name="fullname" value="{{ old('fullname',$employee->fullname) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Equipo</label>
                            <div class="col-sm-10" >
                                <select name="sn" class="form-control" data-placeholder="Número de Serie" style="width: 100%;">
                                    @foreach ($equipments as $equipment)
                                        <option value="{{ $equipment->sn }}">{{ $equipment->sn }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha de Entrega</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="delivery_date" placeholder="AAAA/MM/DD" value="{{ old('delivery_date') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Observaciones</label>
                            <div class="col-sm-10" >
                                <textarea type="text" rows="5" class="form-control" name="observation" placeholder="Observaciones">{{ old('observation') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Usuario</label>
                            <div class="col-sm-10" >
                                <input type="text" readonly class="form-control" name="delivery_user" value="{{ old('delivery_user', auth()->user()->user) }}">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                            <button type="submit" class="btn btn-success pull-left btn-sm" style="margin: 0px 5px;">Grabar</button>
                            <a class="btn btn-info btn-sm" href="{{ route('equipmentEmployees.index', $employee)}}">Cancelar</a>
                        </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection