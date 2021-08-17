@extends('layouts.main')

@section('title', "Personas")

@section('section','Personas')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('employees.index')}}"> Personas </a></li>
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
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Identificación</label>
                            <div class="col-sm-10" >
                                <input model="text" class="form-control" name="idcard" value="{{ old('idcard') }}" placeholder="Documento de Identificación" maxlength="10">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre Completo</label>
                            <div class="col-sm-10" >
                                <input model="text" class="form-control" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo" maxlength="50">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Oficina</label>
                            <div class="col-sm-10" >
                                <select name="office" class="form-control" data-placeholder="Oficina" style="width: 100%;">
                                    @foreach ($offices as $office)
                                        <option value="{{ $office->name }}">{{ $office->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Área</label>
                            <div class="col-sm-10" >
                                <select name="sector" class="form-control" data-placeholder="Area" style="width: 100%;">
                                    @foreach ($sectors as $sector)
                                        <option value="{{ $sector->name }}">{{ $sector->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cargo</label>
                            <div class="col-sm-10" >
                                <select name="function" class="form-control" data-placeholder="Cargo" style="width: 100%;">
                                    @foreach ($functions as $function)
                                        <option value="{{ $function->name }}">{{ $function->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left btn-sm" style="margin: 0px 5px;">Grabar</button>
                        <a class="btn btn-info btn-sm" href=" {{ route('employees.index') }} ">Cancelar</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection