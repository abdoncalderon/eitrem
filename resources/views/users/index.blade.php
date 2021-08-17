@extends('layouts.main')

@section('title','Usuarios')

@section('section','Usuarios')

@section('level','Administración')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Usuarios</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">

        <div class="box box-info">

            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Usuarios</strong></h3> | 
                <a class="btn btn-success btn-sm" href="{{ route('users.create') }}">Agregar</a>
            </div>
                        
            <div class="box-body">
                
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('users.show', $user)}}">Ver</a>
                                {{-- <a class="btn btn-danger btn-xs" href=" {{ route('users.delete', $user)}} ">Borrar</a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection