@extends('layouts.main')

@section('title', "Sistemas Operativos")

@section('section','Sistemas Operativos')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Esta seguro de eliminar {{ $os->name }} ?</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('oss.show', $os)}}">
                    @csrf
                    @method('DELETE')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Id</label>
                            <div class="col-sm-10">
                                {{-- <input os="email" class="form-control" id="inputEmail3" placeholder="Email"> --}}
                                <input disabled class="form-control" value="{{ $os->id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $os->name }}">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input os="submit" value="Si, Eliminar" class="btn btn-danger" /> | 
                        <a class="btn btn-info" href=" {{ route('oss.index') }} ">No, Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
                
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection