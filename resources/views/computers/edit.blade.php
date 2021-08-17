@extends('layouts.main')

@section('title', "Computadoras")

@section('section','Computadoras')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('equipments.index')}}"> Hardware </a></li>
        <li class="active">Editar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            @foreach ($computers as $computer)
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Editar {{ $computer->type }} {{ $computer->serial }} </strong></h3>
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
                {{--  --}}
                <form class="form-horizontal" method="POST" action="{{ route('computers.update', $computer->serial) }}" >
                    @csrf
                    @method('PATCH')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Número de Serie</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $computer->serial }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10">
                                    <select id="brandsComputer" name="brand" class="form-control" data-placeholder="Marcas" style="width: 100%;">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->name }}"
                                                @if($computer->brand==$brand->name):
                                                    selected="selected"
                                                @endif
                                            >{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Modelo</label>
                            <div class="col-sm-10">
                                <select id="model" name="model" class="form-control" data-placeholder="Modelos" style="width: 100%;">
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10">

                                <select id="provider" name="provider" class="form-control" data-placeholder="Proveedor" style="width: 100%;">
                                    @foreach ($providers as $provider)
                                        <option value="{{ $provider->name }}"
                                            @if($computer->provider==$provider->name):
                                                selected="selected"
                                            @endif
                                        >{{ $provider->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Código de Inventario</label>
                            <div class="col-sm-10">
                                <input computer="text" class="form-control" name="inventory" value="{{ old('inventory', $computer->inventory) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sistema Operativo</label>
                            <div class="col-sm-10">
                                <select id="os" name="os" class="form-control" data-placeholder="Sistema Operativo" style="width: 100%;">
                                        @foreach ($oss as $os)
                                            <option value="{{ $os->name }}"
                                                @if($computer->os==$os->name):
                                                    selected="selected"
                                                @endif
                                            >{{ $os->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hostname</label>
                            <div class="col-sm-10">
                                <input computer="text" class="form-control" name="hostname" value="{{ old('hostname', $computer->hostname) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Memoria</label>
                            <div class="col-sm-10">
                                <input computer="text" class="form-control" name="ram" value="{{ old('ram', $computer->ram) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Disco Duro</label>
                            <div class="col-sm-10">
                                <input computer="text" class="form-control" name="hd" value="{{ old('hd', $computer->hd) }}">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left btn-sm" style="margin: 0px 5px;">Grabar</button>
                        <a class="btn btn-info btn-sm" href=" {{ route('equipments.index') }} ">Cancelar</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
            @endforeach
        </div>
    </section>
@endsection