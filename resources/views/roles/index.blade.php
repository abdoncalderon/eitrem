@extends('layouts.main')

@section('title', "Roles")

@section('section','Roles')

@section('level','Administración')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Roles</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">

        <div class="box box-info">

            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Roles</strong></h3> | 
                <a class="btn btn-success btn-sm" href="{{ route('roles.create') }}">Agregar</a>
            </div>
            
            <div class="box-body">
                
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('roles.show', $role)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('roles.delete', $role)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection