<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reporte Individual</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();window.close()">
   
    <div class="wrapper">

        <section class="invoice">
        
            <div class="row">
                <div class="col-xs-12">
                    <h4>
                        <small>Consorcio Linea 1 Metro de Quito - Acciona</small>  
                        <small class="pull-right">Fecha: {{ date('Y-m-d') }}</small>
                    </h4>
                </div>
            </div>
    
            <div class="row">
                <div class="col-xs-12">
                    <h3 align="center"><strong>Registro de Entrega de Recursos IT</strong></h3>
                </div>
            </div>
               
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <small>Integrante:</small>
                    <address>
                    <strong>{{$employee->fullname}}</strong><br>
                    {{$employee->idcard}}<br>
                    {{$employee->sector}}<br>
                    {{$employee->function}}<br>
                    </address>
                </div>
    
                <div class="col-sm-4 invoice-col">
                   
                </div>
    
                <div class="col-sm-4 invoice-col">
                    
                </div>
            </div>
            <small>
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th># Serie</th>
                                <th>Fecha de Entrega</th>
                                <th>Entregado Por</th>
                                <th>Fecha de Devolucion</th>
                                <th>Recibido Por</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipmentEmployees as $equipmentEmployee)
                                <tr>
                                    <td>{{ $equipmentEmployee->type }}</td>
                                    <td>{{ $equipmentEmployee->brand }}</td>
                                    <td>{{ $equipmentEmployee->model }}</td>
                                    <td>{{ $equipmentEmployee->serial }}</td>
                                    <?php $deliveryDate = new DateTime($equipmentEmployee->delivery_date) ?>
                                    <td>{{ $deliveryDate->format('Y-m-d') }}</td>
                                    <td>{{ $equipmentEmployee->delivery_user }}</td>
                                    <?php $returnDate = new DateTime($equipmentEmployee->return_date) ?>
                                    <td>{{ $returnDate->format('Y-m-d') }}</td>
                                    <td>{{ $equipmentEmployee->return_user }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </small>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Departamento de IT</th>
                                    <th>Integrante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td></td>
                                <td></td>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>

        </section>

    </div>

</body>
</html>
