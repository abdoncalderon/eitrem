@extends('layouts.main')

@section('title', "Modelos")

@section('section','Modelos de Equipos')

@section('level','Configuración')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Modelos</li>
    </ol>
@endsection

@section('mainContent')

    <section class="content">

        <div class="box box-info">
        

            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Modelos</strong></h3> | 
                <a class="btn btn-success btn-sm" href=" {{ route('models.create') }} ">Agregar</a>
            </div>


            <div class="box-body">

                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($models as $model)
                        <tr>
                            <td>{{ $model->name }}</td>
                            <td>{{ $model->type }}</td>
                            <td>{{ $model->brand }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('models.show', $model)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('models.delete', $model)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection