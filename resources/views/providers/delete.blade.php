@extends('layouts.main')

@section('title', 'Proveedores')

@section('section','Proveedores')

@section('level','Gestión')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('providers.index')}}"> Proveedores </a></li>
        <li class="active">Eliminar</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Eliminar {{ $provider->name }} ?</strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('providers.show', $provider)}}">
                    @csrf
                    @method('DELETE')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Id</label>
                            <div class="col-sm-10">
                                {{-- <input provider="email" class="form-control" id="inputEmail3" placeholder="Email"> --}}
                                <input disabled class="form-control" value="{{ $provider->id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $provider->name }}">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-danger pull-left btn-sm" style="margin: 0px 5px;">Si, Eliminar</button>
                        <a class="btn btn-info btn-sm" href=" {{ route('providers.index') }} ">No, Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
                
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection