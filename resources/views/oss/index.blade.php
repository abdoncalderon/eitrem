@extends('layouts.main')

@section('title', "Sistemas Operativos")

@section('section','Sistemas Operativos')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div class="box box-info">
        
            {{-- <div class="box-header">
                <h3 class="box-title">Todos los Tipos</h3>
            </div> --}}
            
            <div class="box-body">

                <div style="margin: 20px 0px">
                    <a class="btn btn-success" href=" {{ route('oss.create') }} ">Crear</a>
                </div>
                
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($oss as $os)
                        <tr>
                            <td>{{ $os->name }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('oss.show', $os)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('oss.delete', $os)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection