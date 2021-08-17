@extends('layouts.main')

@section('title', "Presupuesto")

@section('section','Presupuesto')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('budgets.resume')}}"> Presupuesto </a></li>
        <li class="active">Detalles</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <form class="form-horizontal" method="POST" action="{{ route('budgets.destroy', $budget) }}">
                    @csrf
                    @method('DELETE')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cuenta</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $budget->account }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Año</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $budget->year }}">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mes</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $budget->month_ }}">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Value</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $budget->value }}">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success btn-sm">Eliminar</button>
                        <a class="btn btn-success btn-sm" href=" {{ route('budgets.edit',$budget->id ) }} ">Editar</a>
                        <a class="btn btn-info btn-sm" href=" {{ route('budgets.resume') }} ">Regresar al resumen</a> 
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection