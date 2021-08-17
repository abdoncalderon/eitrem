@extends('layouts.main')

@section('title','Planes Celulares')

@section('section','Planes Celulares')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de {{ $cellularPlan->name }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Id</label>
                            <div class="col-sm-10">
                                {{-- <input cellularPlan="email" class="form-control" id="inputEmail3" placeholder="Email"> --}}
                                <input disabled class="form-control" value="{{ $cellularPlan->id }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $cellularPlan->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proveedor</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $cellularPlan->provider }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Precio</label>
                            <div class="col-sm-10">
                                <input disabled class="form-control" value="{{ $cellularPlan->price }}">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-success" href=" {{ route('cellularPlans.edit', $cellularPlan) }} ">Editar</a>
                        <a class="btn btn-info" href=" {{ route('cellularPlans.index') }} ">Regresar a la lista</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection