@extends('layouts.main')

@section('title', "Impresoras")

@section('section','Impresoras')

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
            @foreach ($printers as $printer)
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Editar {{ $printer->type }} {{ $printer->serial }} </strong></h3>
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
                <form class="form-horizontal" method="POST" action="{{ route('printers.update', $printer->serial) }}" >
                    @csrf
                    @method('PATCH')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Número de Serie</label>
                            <div class="col-sm-10">
                                <input readonly class="form-control" value="{{ $printer->serial }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10">
                                    <select id="brandsPrinter" name="brand" class="form-control" data-placeholder="Marcas" style="width: 100%;">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->name }}"
                                                @if($printer->brand==$brand->name):
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
                                            @if($printer->provider==$provider->name):
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
                                <input printer="text" class="form-control" name="inventory" value="{{ old('inventory', $printer->inventory) }}">
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Dirección IP</label>
                            <div class="col-sm-10">
                                <input printer="text" class="form-control" name="ip" value="{{ old('ip', $printer->ip) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ubicada en</label>
                            <div class="col-sm-10" >
                                <select name="office" class="form-control" data-placeholder="Ubicación" style="width: 100%;">
                                    @foreach ($offices as $office)
                                        <option value="{{ $office->name }}"
                                            @if($printer->office==$office->name):
                                                selected="selected"
                                            @endif
                                        >{{ $office->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Negro</label>
                            <div class="col-sm-10">
                                <input class="form-check-input" type="checkbox" class="form-control" name="black" 
                                @if($printer->black==1)
                                    checked
                                @endif
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                                <input type="checkbox" class="form-check-input" class="form-control" name="color"
                                @if($printer->color==1)
                                    checked
                                @endif 
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">USB</label>
                            <div class="col-sm-10">
                                <input type="checkbox" class="form-check-input" class="form-control" name="usb"
                                @if($printer->usb==1)
                                    checked
                                @endif
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ethernet</label>
                            <div class="col-sm-10">
                                <input type="checkbox" class="form-check-input" class="form-control" name="ethernet"
                                @if($printer->ethernet==1)
                                    checked
                                @endif
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Wifi</label>
                            <div class="col-sm-10">
                                <input type="checkbox" class="form-check-input" class="form-control" name="wifi"
                                @if($printer->wifi==1)
                                    checked
                                @endif
                                >
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-10">
                                <input printer="text" class="form-control hidden" name="storedin" value="{{ old('storedin', $printer->office) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input printer="text" class="form-control hidden" name="status" value="{{ old('status', $printer->status) }}">
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