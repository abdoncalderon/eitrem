@extends('layouts.main')

@section('title', "Facturas")

@section('section','Facturas')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('billings.index')}}"> Facturas </a></li>
        <li class="active">Editar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Editar {{ $billing->number }}</strong></h3>
                </div>
                @if($errors->any())
                    <h4 style="color:red;margin: 0px 40px;"><strong>Errores:</strong></h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><strong>{{ $error }}</strong></li>
                        @endforeach
                    </ul>
                @endif
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('billings.update', $billing) }}">
                    @csrf
                    @method('PATCH')
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="date" value="{{ old('date', date('Y/m/d', strtotime($billing->date))) }}" placeholder="Fecha de la factura">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Numero</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="number" value="{{ old('number', $billing->number) }}" placeholder="Número de la factura">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10" >
                                <select name="provider" class="form-control" value="{{ old('provider', $billing->provider) }}" style="width: 100%;">
                                    @foreach ($providers as $provider)
                                        <option value="{{ $provider->name }}"
                                            @if($billing->provider==$provider->name):
                                                selected="selected"
                                            @endif
                                        >{{ $provider->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cuenta</label>
                            <div class="col-sm-10" >
                                <select name="account" class="form-control" value="{{ old('account', $billing->account) }}" style="width: 100%;">
                                    @foreach ($accounts as $account)
                                        <option value="{{ $account->name }}" 
                                            @if($billing->account==$account->name):
                                            selected="selected"
                                            @endif
                                        >{{ $account->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Valor</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="value" value="{{ old('value', $billing->value) }}" placeholder="Valor de la factura">
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left btn-sm" style="margin: 0px 5px;">Grabar</button>
                        <a class="btn btn-info btn-sm" href=" {{ route('billings.index') }} ">Cancelar</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection