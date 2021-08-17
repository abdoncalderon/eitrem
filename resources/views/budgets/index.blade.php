@extends('layouts.main')

@section('title', "Presupuesto")

@section('section','Presupuesto')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('budgets.resume')}}"> Presupuesto </a></li>
        <li class="active">Por Cuenta/Año</li>
    </ol>
@endsection

@section('mainContent')
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border center-block">
            <h3 class="box-title"><strong> {{ $account }} - {{ $year }}</strong></h3> | 
            {{-- <a class="btn btn-success btn-sm" href=" {{ route('budgets.create') }} ">Agregar</a> --}}
            <a class="btn btn-success btn-sm" href=" {{ route('budgets.create',[$account,$year]) }} ">Agregar</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Mes</th>
                        <th>Valor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($budgets as $budget)
                    <tr>
                        <td>{{ $budget->month_ }}</td>
                        <td>{{ $budget->value }}</td>
                        <td><a class="btn btn-info btn-xs" href="{{ route('budgets.show', $budget->id) }}">Ver</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection