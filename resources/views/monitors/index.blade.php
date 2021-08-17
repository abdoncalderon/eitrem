<div class="box box-info">
        <div class="box-header with-border center-block">
            <h3 class="box-title"><strong>Monitores</strong></h3> | 
            <a class="btn btn-success btn-sm" href=" {{ route('monitors.create') }} ">Agregar</a>
        </div>
            
        <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Serie</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach($monitors as $monitor)
                        <tr>
                            <td>{{ $monitor->brand }}</td>
                            <td>{{ $monitor->model }}</td>
                            <td>{{ $monitor->serial }}</td>
                            <td>{{ $monitor->status }}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ route('monitors.show', $monitor->serial)}}">Ver</a>
                                {{--<a class="btn btn-danger btn-xs" href="{{ route('employees.delete', $employee)}}">Borrar</a>
                                <a class="btn btn-success btn-xs" href="{{ route('equipmentEmployees.index', $employee)}}">Equipos</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
    </div>