@extends('layouts.main')

@section('title', "Tipos")

@section('section','Tipos de Equipos')

@section('level','Configuración')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('types.index')}}"> Tipos </a></li>
        <li class="active">Detalles</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ $type->name }}</strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Id</label>
                            <div class="col-sm-10">
                                {{-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> --}}
                                <input disabled class="form-control" value="{{ $type->id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $type->name }}">
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-success btn-sm" href=" {{ route('types.edit', $type) }} ">Editar</a>
                        <a class="btn btn-info btn-sm" href=" {{ route('types.index') }} ">Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection