@extends('layouts.main')

@section('title', "Equipos por Empleado")

@section('section','Equipos por Empleado')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('employees.index')}}"> Personas </a></li>
        <li class="active">Equipos Asignados</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div class="box box-info">


            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Equipos asignados a {{ $employee->fullname }}</strong></h3> | 
                <a class="btn btn-success btn-sm" href=" {{ route('equipmentEmployees.create', $employee) }} ">Agregar</a>
            </div>

            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nº Serie</th>
                            <th>Tipo</th>
                            <th>Modelo</th>
                            <th>Entrega</th>
                            <th>Devolución</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($equipmentEmployees as $equipmentEmployee)
                        <tr>
                            <td>{{ $equipmentEmployee->serial }}</td>
                            <td>{{ $equipmentEmployee->type }}</td>
                            <td>{{ $equipmentEmployee->model }}</td>
                            <td>{{ $equipmentEmployee->delivery_date }}</td>
                            <td>{{ $equipmentEmployee->return_date }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('equipmentEmployees.show', $equipmentEmployee->idexe) }}">Ver</a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <a class="btn btn-success btn-sm" href="{{ route('reports.showRDR',$employee) }}">Reporte</a>
                <a class="btn btn-info btn-sm" href=" {{ route('employees.index') }} ">Regresar a Personas</a>
            </div>
        </div>
    </section>
@endsection