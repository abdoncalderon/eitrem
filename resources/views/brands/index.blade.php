@extends('layouts.main')

@section('title','Marcas')

@section('section','Marcas de Equipos')

@section('level','Configuración')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Marcas</li>
    </ol>
@endsection

@section('mainContent')

    <section class="content">

        <div class="box box-info">

            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Marcas</strong></h3> | 
                <a class="btn btn-success btn-sm" href=" {{ route('brands.create') }} ">Agregar</a>
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
                        @foreach($brands as $brand)
                        <tr>
                            <td>{{ $brand->name }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('brands.show', $brand)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('brands.delete', $brand)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection