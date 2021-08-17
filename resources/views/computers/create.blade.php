@extends('layouts.main')

@section('title', "Computadoras")

@section('section','Computadoras')

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
                
                <form class="form-horizontal" method="POST" action="{{ route('computers.store') }}">
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
                                <select id="brandsComputer" name="brand" class="form-control" data-placeholder="Marcas" style="width: 100%;">
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
                                <select id="provider" name="provider" class="form-control"  data-placeholder="Proveedor" style="width: 100%;">
                                    @foreach ($providers as $provider)
                                        <option value="{{ $provider->name }}">{{ $provider->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sistema Operativo</label>
                            <div class="col-sm-10" >
                                <select name="os" class="form-control" data-placeholder="Sistema Operativo" style="width: 100%;">
                                    @foreach ($oss as $os)
                                        <option value="{{ $os->name }}">{{ $os->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">HostName</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="hostname" value="{{ old('hostname') }}" placeholder="HostName" maxlength="20">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Código de Inventario</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="inventory" value="{{ old('inventory') }}" placeholder="Código de Inventario" maxlength="30">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Memoria RAM</label>
                            <div class="col-sm-10" >
                                {{-- <input type="text" class="form-control" name="ram" value="{{ old('ram') }}" placeholder="Memoria RAM" > --}}
                                <select name="ram" class="form-control" style="width: 100%;">
                                    @for($i=1;$i<64;$i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Disco Duro</label>
                            <div class="col-sm-10" >
                                {{-- <input type="text" class="form-control" name="hd" value="{{ old('hd') }}" placeholder="Disco Duro"> --}}
                                <select name="hd" class="form-control" style="width: 100%;">
                                    @for($i=64;$i<4096;$i=$i+64)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Almacenado en</label>
                            <div class="col-sm-10" >
                                <select name="storedin" class="form-control" data-placeholder="Ubicación" style="width: 100%;">
                                    @foreach ($offices as $office)
                                        <option value="{{ $office->name }}">{{ $office->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Estado</label>
                            <div class="col-sm-10" >
                                <input readonly type="text" class="form-control" name="status" value="AVAILABLE">
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