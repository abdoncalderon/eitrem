@extends('layouts.main')

@section('title','Planes Celulares')

@section('section','Planes Celulares')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Tipo {{ $cellularPlan->name }}</h3>
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
                <form class="form-horizontal" method="POST" action="{{ route('cellularPlans.update', $cellularPlan) }}">
                    @csrf
                    @method('PATCH')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10" >
                                <input cellularPlan="text" class="form-control" name="name" value="{{ old('name', $cellularPlan->name) }}" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10" >
                                <select name="provider" class="form-control" value="{{ old('provider', $cellularPlan->provider) }}" style="width: 100%;">
                                    @foreach ($providers as $provider)
                                        <option value="{{ $provider->name }}"
                                            @if($cellularPlan->provider==$provider->name):
                                                selected="selected"
                                            @endif
                                        >{{ $provider->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Precio</label>
                            <div class="col-sm-10" >
                                <input cellularPlan="text" class="form-control" name="price" value="{{ old('price', $cellularPlan->price) }}" placeholder="Precio">
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10" >
                                <select name="brand" class="form-control" value="{{ old('brand', $cellularPlan->price) }}" style="width: 100%;">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->name }}" 
                                            @if($cellularPlan->brand==$brand->name):
                                            selected="selected"
                                            @endif
                                        >{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button cellularPlan="submit" class="btn btn-success pull-left">Grabar</button> | 
                        <a class="btn btn-info" href=" {{ route('cellularPlans.index') }} ">Cancelar</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection