<?php
    
?>
<div class="box box-info">
    <div class="box-header with-border center-block">
        <h3 class="box-title"><strong>Computadoras</strong></h3> | 
        <a class="btn btn-success btn-sm" href="{{ route('computers.create') }}">Agregar</a>
    </div>
        
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">

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
                @foreach($computers as $computer)
                    <tr>
                        <td>{{ $computer->type }}</td>
                        <td>{{ $computer->model }}</td>
                        <td>{{ $computer->serial }}</td>
                        <td>{{ $computer->status }}</td>
                        <td>
                            <a class="btn btn-info btn-xs" href="{{ route('computers.show', $computer->serial) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</div>
