@extends('layouts.main')

@section('title', "Areas")

@section('section','Areas')

@section('level','Configuración')

@section('mainContent')
    <section class="content">
        <div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Area {{ $sector->name }}</h3>
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
                <form class="form-horizontal" method="POST" action="{{ route('sectors.update', $sector) }}">
                    @csrf
                    @method('PATCH')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10" >
                                <input sector="text" class="form-control" name="name" value="{{ old('name', $sector->name) }} " placeholder="Nombre">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-left">Grabar</button> | 
                        <a class="btn btn-info" href=" {{ route('sectors.index') }} ">Cancelar</a>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection