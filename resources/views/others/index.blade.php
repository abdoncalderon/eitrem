<div class="box box-info">
        <div class="box-header with-border center-block">
            <h3 class="box-title"><strong>Otros Equipos</strong></h3> | 
            <a class="btn btn-success btn-sm" href=" {{ route('equipments.create') }} ">Agregar</a>
        </div>
            
        <div class="box-body">
            <table id="example4" class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Serie</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach($others as $other)
                        <tr>
                            <td>{{ $other->type }}</td>
                            <td>{{ $other->model }}</td>
                            <td>{{ $other->serial }}</td>
                            <td>{{ $other->status }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('equipments.show', $other->serial)}}">Ver</a>
                                {{--<a class="btn btn-danger btn-xs" href="{{ route('employees.delete', $employee)}}">Borrar</a>
                                <a class="btn btn-success btn-xs" href="{{ route('equipmentEmployees.index', $employee)}}">Equipos</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
    </div>