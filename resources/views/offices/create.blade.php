@extends('layouts.main')

@section('title', "Oficinas")

@section('section','Oficinas')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Oficina</h3>
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
                <form class="form-horizontal" method="POST" action="{{ route('offices.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10" >
                                <input model="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Region</label>
                            <div class="col-sm-10" >
                                <select name="region" class="form-control" data-placeholder="Tipo" style="width: 100%;">
                                    @foreach ($regions as $region)
                                        <option value="{{ $region->name }}">{{ $region->name }}</option>
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