@extends('layouts.main')

@section('title', "Otros Equipos")

@section('section','Otros Equipos')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('equipments.index')}}"> Hardware </a></li>
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
                
                <form class="form-horizontal" method="POST" action="{{ route('equipments.store') }}">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Número de Serie</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="sn" value="{{ old('sn') }}" placeholder="Número de Serie" maxlength="30">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10" >
                                <select id="brandsOther" name="brand" class="form-control" data-placeholder="Marcas" style="width: 100%;">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Modelo</label>
                            <div class="col-sm-10" >
                                <select id="model" name="model" class="form-control" data-placeholder="Modelos" style="width: 100%;">
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10" >
                                <select id="provider" name="provider" class="form-control" data-placeholder="Proveedor" style="width: 100%;" >
                                    @foreach ($providers as $provider)
                                        <option value="{{ $provider->name }}">{{ $provider->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Código de Inventario</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="inventory" value="{{ old('inventory') }}" placeholder="Código de Inventario" maxlength="30">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Almacenado en</label>
                            <div class="col-sm-10" >
                                <select name="office" class="form-control" data-placeholder="Ubicación" style="width: 100%;">
                                    @foreach ($offices as $office)
                                        <option value="{{ $office->name }}">{{ $office->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Estado</label>
                            <div class="col-sm-10" >
                                <input disabled type="text" class="form-control" name="status" value="AVAILABLE">
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left btn-sm" style="margin: 0px 5px;">Grabar</button>
                        <a class="btn btn-info btn-sm" href=" {{ route('equipments.index') }} ">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection