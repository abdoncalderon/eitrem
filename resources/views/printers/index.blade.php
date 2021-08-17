<div class="box box-info">
    <div class="box-header with-border center-block">
        <h3 class="box-title"><strong>Impresoras</strong></h3> | 
        <a class="btn btn-success btn-sm" href=" {{ route('printers.create') }} ">Agregar</a>
    </div>
        
    <div class="box-body">
        <table id="example3" class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Serie</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($printers as $printer)
                    <tr>
                        <td>{{ $printer->brand }}</td>
                        <td>{{ $printer->model }}</td>
                        <td>{{ $printer->serial }}</td>
                        <td>
                            <a class="btn btn-info btn-xs" href="{{ route('printers.show', $printer->serial)}}">Ver</a>
                            {{--<a class="btn btn-danger btn-xs" href="{{ route('employees.delete', $employee)}}">Borrar</a>
                            <a class="btn btn-success btn-xs" href="{{ route('equipmentEmployees.index', $employee)}}">Equipos</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>