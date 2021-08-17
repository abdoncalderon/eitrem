@extends('layouts.main')

@section('title','Proveedores')

@section('section','Proveedores')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Provedores</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">

        <div class="box box-info">

            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Provedores</strong></h3> | 
                <a class="btn btn-success btn-sm" href=" {{ route('providers.create') }} ">Agregar</a>
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
                        @foreach($providers as $provider)
                        <tr>
                            <td>{{ $provider->name }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('providers.show', $provider)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('providers.delete', $provider)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection