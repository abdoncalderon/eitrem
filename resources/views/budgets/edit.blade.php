@extends('layouts.main')

@section('title', "Presupuesto")

@section('section','Presupuesto')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('budgets.resume')}}"> Presupuesto </a></li>
        <li class="active">Editar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                @if($errors->any())
                    <h4 style="color:red;margin: 0px 40px;"><strong>Errores:</strong></h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><strong>{{ $error }}</strong></li>
                        @endforeach
                    </ul>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('budgets.update', $budget) }}">
                    @csrf
                    @method('PATCH')
                    <div class="box-body">
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cuenta</label>
                            <div class="col-sm-10">
                                <input name="account" readonly class="form-control" value="{{ $budget->account }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Año</label>
                            <div class="col-sm-10">
                                <input name="yeart" readonly class="form-control" value="{{ $budget->year }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cuenta</label>
                            <div class="col-sm-10">
                                <input name="month_" readonly class="form-control" value="{{ date('F',mktime(0, 0, 0, $budget->month_, 1, 2000)) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Valor</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="value" value="{{ old('value',$budget->value) }}" placeholder="Valor" maxlength="8">
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success btn-sm">Grabar</button>
                        <a class="btn btn-info btn-sm" href=" {{ route('budgets.resume') }} ">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection