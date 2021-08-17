@extends('layouts.main')

@section('title', "Personas")

@section('section','Personas')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Personas</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Personas</strong></h3> | 
                <a class="btn btn-success btn-sm" href=" {{ route('employees.create') }} ">Agregar</a>
            </div>
                
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Identificación</th>
                            <th>Nombre Completo</th>
                            <th>Área</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->idcard }}</td>
                            <td>{{ $employee->fullname }}</td>
                            <td>{{ $employee->sector }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('employees.show', $employee)}}">Ver</a>
                                <a class="btn btn-danger btn-xs" href="{{ route('employees.delete', $employee)}}">Borrar</a>
                                <a class="btn btn-success btn-xs" href="{{ route('equipmentEmployees.index', $employee)}}">Equipos</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            
        </div>
    </section>
@endsection