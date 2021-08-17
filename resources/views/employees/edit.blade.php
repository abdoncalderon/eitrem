@extends('layouts.main')

@section('title', "Personas")

@section('section','Personas')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('employees.index')}}"> Personas </a></li>
        <li class="active">Editar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Tipo {{ $employee->fullname }}</h3>
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
                <form class="form-horizontal" method="POST" action="{{ route('employees.update', $employee) }}">
                    @csrf
                    @method('PATCH')
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Identificación</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="idcard" value="{{ old('name', $employee->idcard) }}" placeholder="Identificación">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre Completo</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="fullname" value="{{ old('name', $employee->fullname) }}" placeholder="Nombre Completo">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Oficina</label>
                            <div class="col-sm-10" >
                                <select name="office" class="form-control" value="{{ old('office', $employee->office) }}" style="width: 100%;">
                                    @foreach ($offices as $office)
                                        <option value="{{ $office->name }}"
                                            @if($employee->office==$office->name):
                                                selected="selected"
                                            @endif
                                        >{{ $office->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Area</label>
                            <div class="col-sm-10" >
                                <select name="sector" class="form-control" value="{{ old('sector', $employee->sector) }}" style="width: 100%;">
                                    @foreach ($sectors as $sector)
                                        <option value="{{ $sector->name }}" 
                                            @if($employee->sector==$sector->name):
                                            selected="selected"
                                            @endif
                                        >{{ $sector->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">Cargo</label>
                                <div class="col-sm-10" >
                                    <select name="function" class="form-control" value="{{ old('function', $employee->function) }}" style="width: 100%;">
                                        @foreach ($functions as $function)
                                            <option value="{{ $function->name }}" 
                                                @if($employee->function==$function->name):
                                                selected="selected"
                                                @endif
                                            >{{ $function->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left btn-sm" style="margin: 0px 5px;">Grabar</button> | 
                        <a class="btn btn-info btn-sm" href=" {{ route('employees.index') }} ">Cancelar</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection