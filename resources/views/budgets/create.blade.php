@extends('layouts.main')

@section('title', "Presupuestos")

@section('section','Presupuestos')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('billings.index')}}"> Presupuestos </a></li>
        <li class="active">Agregar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Agregar</strong></h3>
                </div>
                @if($errors->any())
                    <h4 style="color:red;margin: 0px 40px;"><strong>Errores:</strong></h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><strong>{{ $error }}</strong></li>
                        @endforeach
                    </ul>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('budgets.store') }}">
                    @csrf
                    <div class="box-body">
                        
                        {{-- <div class="form-group">
                            <label class="col-sm-2 control-label">Cuenta</label>
                            <div class="col-sm-10" >
                                <select name="account" class="form-control" data-placeholder="Cuenta" style="width: 100%;">
                                    @foreach ($accounts as $account)
                                        <option value="{{ $account->name }}">{{ $account->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Año</label>
                            <div class="col-sm-10" >
                                <select name="year" class="form-control" data-placeholder="Año" style="width: 100%;">
                                    @foreach ($years as $year)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cuenta</label>
                            <div class="col-sm-10">
                                <input disabled name="account" class="form-control" value="{{ $account }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Año</label>
                            <div class="col-sm-10">
                                <input disabled name="year" class="form-control" value="{{ $year }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mes</label>
                            <div class="col-sm-10" >
                                <select name="month_" class="form-control" data-placeholder="Mes" style="width: 100%;">
                                    @foreach ($months as $month)
                                        <option value="{{ $month }}">{{ date('F',mktime(0, 0, 0, $month, 1, 2000)) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Valor</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="value" value="{{ old('value') }}" placeholder="Valor" maxlength="8">
                            </div>
                        </div>
                       
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left btn-sm" style="margin: 0px 5px;">Grabar</button>
                        <a class="btn btn-info btn-sm" href=" {{ route('budgets.resume') }} ">Cancelar</a>
                    </div>
                    <!-- /.box-footer -->
                </form>

            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection