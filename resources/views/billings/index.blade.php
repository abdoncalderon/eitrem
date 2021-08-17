@extends('layouts.main')

@section('title', "Facturas")

@section('section','Facturas')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Facturas</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border center-block">
                <h3 class="box-title"><strong>Facturas</strong></h3> | 
                <a class="btn btn-success btn-sm" href=" {{ route('billings.create') }} ">Agregar</a>
            </div>
                
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Numero de Factura</th>
                            <th>Proveedor</th>
                            <th>Cuenta</th>
                            <th>Valor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($billings as $billing)
                        <tr>
                            {{-- <td>{{ $billing->date }}</td> --}}
                            <td>{{ date('Y/m/d', strtotime($billing->date)) }}</td>;
                            <td>{{ $billing->number }}</td>
                            <td>{{ $billing->provider }}</td>
                            <td>{{ $billing->account }}</td>
                            <td>{{ $billing->value }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('billings.show', $billing)}}">Ver</a>
                                <a class="btn btn-danger btn-xs" href="{{ route('billings.delete', $billing)}}">Borrar</a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            
        </div>
    </section>
@endsection