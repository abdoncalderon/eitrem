@extends('layouts.main')

@section('title','Planes Celulares')

@section('section','Planes Celulares')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div class="box box-info">
        
            {{-- <div class="box-header">
                <h3 class="box-title">Todos los Tipos</h3>
            </div> --}}
            
            <div class="box-body">

                <div style="margin: 20px 0px">
                    <a class="btn btn-success" href=" {{ route('models.create') }} ">Crear</a>
                </div>
                
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cellularPlans as $cellularPlan)
                        <tr>
                            <td>{{ $cellularPlan->name }}</td>
                            <td>{{ $cellularPlan->provider }}</td>
                            <td>{{ $cellularPlan->price }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('cellularPlans.show', $cellularPlan)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('cellularPlans.delete', $cellularPlan)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection