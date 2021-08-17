@extends('layouts.main')

@section('title', "Cuentas")

@section('section','Cuentas')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Cuentas</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">

        <div class="box box-info">

            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Cuentas</strong></h3> | 
                <a class="btn btn-success btn-sm" href="{{ route('accounts.create')}} ">Agregar</a>
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
                        @foreach($accounts as $account)
                        <tr>
                            <td>{{ $account->name }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('accounts.show', $account)}}">Ver</a> | 
                                <a class="btn btn-danger btn-xs" href=" {{ route('accounts.delete', $account)}} ">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection