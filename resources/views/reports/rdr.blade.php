@extends('layouts.main')

@section('title', "Individual")

@section('section','Individual')

@section('level','Reportes')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('employees.index')}}"> Personas </a></li>
        <li class="active">Equipos Asignados</li>
    </ol>
@endsection

@section('mainContent')

    <section class="invoice">
        
        <div class="row">
            <div class="col-xs-12">
                <h4>
                    <small>Consorcio Linea 1 Metro de Quito - Acciona</small>
                    <small class="pull-right">Fecha: {{ date('Y-m-d') }}</small>
                </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h3 align="center"><strong>Registro de Entrega de Recursos Tecnológicos</strong></h3>
            </div>
        </div>
           
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <small>Integrante:</small>
                <address>
                <strong>{{$employee->fullname}}</strong><br>
                {{$employee->idcard}}<br>
                {{$employee->sector}}<br>
                {{$employee->function}}<br>
                </address>
            </div>

            <div class="col-sm-4 invoice-col">
            </div>

            <div class="col-sm-4 invoice-col">
            </div>
        </div>
        <small>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th># Serie</th>
                            <th>Fecha de Entrega</th>
                            <th>Entregado Por</th>
                            <th>Fecha de Devolucion</th>
                            <th>Recibido Por</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipmentEmployees as $equipmentEmployee)
                            <tr>
                                <td>{{ $equipmentEmployee->type }}</td>
                                <td>{{ $equipmentEmployee->brand }}</td>
                                <td>{{ $equipmentEmployee->model }}</td>
                                <td>{{ $equipmentEmployee->serial }}</td>
                                <?php $deliveryDate = new DateTime($equipmentEmployee->delivery_date) ?>
                                <td>{{ $deliveryDate->format('Y-m-d') }}</td>
                                <td>{{ $equipmentEmployee->delivery_user }}</td>
                                <?php $returnDate = new DateTime($equipmentEmployee->return_date) ?>
                                <td>{{ $returnDate->format('Y-m-d') }}</td>
                                <td>{{ $equipmentEmployee->return_user }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </small>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Departamento de IT</th>
                                <th>Integrante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row no-print">
            <div class="col-xs-12">
                {{-- <a href="{{ route('reports.printRDR',$employee) }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a> --}}
                <button onclick="window.print();window.close()" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
            </div>
        </div>

    </section>
@endsection