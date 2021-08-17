@extends('layouts.main')

@section('title', "Regiones")

@section('section','Regiones')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div class="box box-info">
        
            {{-- <div class="box-header">
                <h3 class="box-title">Todos los Tipos</h3>
            </div> --}}
            
            <div class="box-body">

                <div style="margin: 20px 0px">
                    <a class="btn btn-success" href=" {{ route('regions.create') }} ">Crear</a>
                </div>
                
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($regions as $region)
                        <tr>
                            <td>{{ $region->name }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('regions.show', $region)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('regions.delete', $region)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection