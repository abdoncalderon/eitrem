@extends('layouts.main')

@section('title', "Tipos")

@section('section','Tipos de Equipos')

@section('level','Configuración')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('types.index')}}"> Tipos </a></li>
        <li class="active">Editar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Editar {{ $type->name }}</strong></h3>
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
                <form class="form-horizontal" method="POST" action="{{ route('types.update', $type) }}">
                    @csrf
                    @method('PATCH')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10" >
                                <input type="text" class="form-control" name="name" value="{{ old('name', $type->name) }} " placeholder="Nombre">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left btn-sm" style="margin: 0px 5px;">Grabar</button>
                        <a class="btn btn-info btn-sm" href="{{ route('types.index') }}">Cancelar</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection