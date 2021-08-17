@extends('layouts.main')

@section('title', "Oficinas")

@section('section','Oficinas')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div class="box box-info">
        
            {{-- <div class="box-header">
                <h3 class="box-title">Todos los Tipos</h3>
            </div> --}}
            
            <div class="box-body">

                <div style="margin: 20px 0px">
                    <a class="btn btn-success" href=" {{ route('offices.create') }} ">Crear</a>
                </div>
                
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Oficina</th>
                            <th>Region</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($offices as $office)
                        <tr>
                            <td>{{ $office->name }}</td>
                            <td>{{ $office->region }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('offices.show', $office)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('offices.delete', $office)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection