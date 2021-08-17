@extends('layouts.main')

@section('title', "Modelos")

@section('section','Modelos de Equipos')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Modelo</h3>
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
                <form class="form-horizontal" method="POST" action="{{ route('models.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10" >
                                <input model="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tipo</label>
                            <div class="col-sm-10" >
                                <select name="type" class="form-control" data-placeholder="Tipo" style="width: 100%;">
                                    @foreach ($types as $type)
                                        <option value="{{ $type->name }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10" >
                                <select name="brand" class="form-control" data-placeholder="Tipo" style="width: 100%;">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left">Crear</button> | 
                        <a class="btn btn-info" href=" {{ route('models.index') }} ">Cancelar</a>
                        
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection