@extends('layouts.main')

@section('title', "Oficinas")

@section('section','Oficinas')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Esta seguro de eliminar {{ $office->name }} ?</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('offices.show', $office)}}">
                    @csrf
                    @method('DELETE')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Id</label>
                            <div class="col-sm-10">
                                {{-- <input office="email" class="form-control" id="inputEmail3" placeholder="Email"> --}}
                                <input disabled class="form-control" value="{{ $office->id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tipo</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $office->type }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Region</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $office->region }}">
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="submit" value="Si, Eliminar" class="btn btn-danger" /> | 
                        <a class="btn btn-info" href=" {{ route('offices.index') }} ">No, Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
                
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection