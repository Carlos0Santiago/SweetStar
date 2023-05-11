<!DOCTYPE html>
<html lang="en">
@include('partials.nav2')



<head>
  <meta charset="UTF-8">
  <title>Empleados</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css'>


</head>

<body>

<div class="title">
  <h1>Empleados</h1>


  <div class="container mt-5">
    <table id="total" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        <th>#</th>
          <th>Nombre</th>
          <th>Curp</th>
          <th>RFC</th>
          <th>Cargo</th>
          <th>Telefono</th>
          <th>Sucursal</th>
        </tr>
      </thead>
      <tbody>

@foreach ($empleados as $listempleados)
      <tr>
          <td>{{$listempleados->id_usuario}}</td>
          <td>{{$listempleados->usuario}}</td>
          <td>{{$listempleados->Curp}}</td>
          <td>{{$listempleados->RFC}}</td>
          <td>{{$listempleados->Cargo}}</td>  
          <td>{{$listempleados->Telefono}}</td>  
          <td>{{$listempleados->nombre_sucursal}}</td>  


  </tr>
  @endforeach
</tbody>

    
  </div>

  <!-- Scripts -->
  <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
  <script src='https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js'></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.7.0/js/buttons.pdf.min.js'></script>


</body>
</html>






<script>
    
    $(document).ready(function() {
      

        // Definir los textos en español
  var spanish = {
    "decimal":        "",
    "emptyTable":     "No hay datos disponibles en la tabla",
    "info":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "infoEmpty":      "Mostrando 0 registros",
    "infoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Mostrar _MENU_ registros",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search":         "Buscar:",
    "zeroRecords":    "No se encontraron registros coincidentes",
    "paginate": {
        "first":      "Primera",
        "last":       "Última",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
    "aria": {
        "sortAscending":  ": activar para ordenar la columna en orden ascendente",
        "sortDescending": ": activar para ordenar la columna en orden descendente"
    }
  };
  // Inicializar las dos tablas
  $('#total').DataTable( {
    
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'copy',
        text: 'Copiar',
        className: 'btn btn-secondary btn-total'
        
      },
      {
        extend: 'csv',
        text: 'CSV',
        className: 'btn btn-secondary btn-total'
      },
      {
        extend: 'excel',
        text: 'Excel',
        className: 'btn btn-secondary btn-total'
      },
      {
        extend: 'pdf',
        text: 'PDF',
        className: 'btn btn-secondary btn-total'
      },
      {
        extend: 'print',
        text: 'Imprimir',
        className: 'btn btn-secondary btn-total'
      }
    ],
    language: spanish // Usar los textos en español definidos arriba

  });


});





</script>



<style>
   .dt-buttons button {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
  }

  .title {
  text-align: center;
  margin-top: 50px;
  
}

.table-responsive {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 5vh;
    }
 

.blue-bg {
  background-color: blue;
}

.red-bg {
  background-color: red;
}




</style>