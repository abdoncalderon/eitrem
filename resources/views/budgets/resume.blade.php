@extends('layouts.main')

@section('title', "Presupuesto")

@section('section','Presupuesto')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Presupuesto</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><strong> Resumen Por Cuenta/Año </strong></h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Año</th>
                            <th>Cuenta</th>
                            <th>Valor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($budgets as $budget)
                        <tr>
                            <td>{{ $budget->year }}</td>
                            <td>{{ $budget->account }}</td>
                            <td>{{ $budget->yearvalue }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('budgets.index', [$budget->account, $budget->year]) }}">Abrir</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            
        </div>
    </section>
@endsection