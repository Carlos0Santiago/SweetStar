<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Articulos</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css'>


</head>

<body>

<div class="title">
  <h1>Articulos</h1>

  <div class="table-responsive" style="text-transform: uppercase;">
    <ul class="nav nav-pills" id="tabsExp" role="tablist">
        <li class="nav-item">
        <a id="liTotal" class="nav-link active blue-bg" data-bs-toggle="tab" href="#total" role="tab" aria-controls="total" aria-selected="true">Total</a>
        </li>
        <li class="nav-item">
            <a id="liStock" class="nav-link" data-bs-toggle="tab" href="#stock" role="tab" aria-controls="stock" aria-selected="false">Stock</a>
        </li>
    </ul>
</div>
  <div class="container mt-5">
  <button id="btnAdd" class="btn btn-primary mb-3">Añadir Articulo</button>
    <table id="total" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        <th>#</th>
          <th>Producto</th>
          <th>Categoria</th>
          <th>P/Provedor</th>
          <th>P/Venta </th>
          <th>Disponibles</th>   
          <th>Sucursal</th>   

        </tr>
      </thead>
      <tbody>

@foreach ($total as $Articulo)
      <tr>
          <td>{{$Articulo->id_producto}}</td>
          <td>{{$Articulo->nombre_producto}}</td>
          <td>{{$Articulo->categoria}}</td>
          <td>{{$Articulo->precio_proveedor}}</td>
          <td>{{$Articulo->precio_venta}}</td>
          <td>{{$Articulo->stock_producto}}</td>
          <td>{{$Articulo->nombre_sucursal}}</td>


  </tr>
  @endforeach
</tbody>
    </table>

    <table id="stock" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>#</th>
          <th>Producto</th>
          <th>Categoria</th>
          <th>P/Provedor</th>
          <th>P/Venta </th>
          <th>Disponibles</th>      
          <th>Sucursal</th>
          <th>Direccion </th>
          <th>Horario </th>

        </tr>
      </thead>
      <tbody>
      @foreach ($stock as $Fullstock)
      <tr>
          <td>{{$Fullstock->id_producto}}</td>
          <td>{{$Fullstock->nombre_producto}}</td>
          <td>{{$Fullstock->categoria}}</td>
          <td>{{$Fullstock->precio_proveedor}}</td>
          <td>{{$Fullstock->precio_venta}}</td>
          <td>{{$Fullstock->stock_producto}}</td>
          <td>{{$Fullstock->nombre_sucursal}}</td>
          <td>{{$Fullstock->direccion_sucursal}}</td>
          <td>{{$Fullstock->horario_sucursal}}</td>


  </tr>
  @endforeach
      </tbody>
    </table>



    
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

  $('#stock').DataTable( {
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'copy',
        text: 'Copiar',
        className: 'btn btn-secondary btn-stock'
        
      },
      {
        extend: 'csv',
        text: 'CSV',
        className: 'btn btn-secondary btn-stock'
      },
      {
        extend: 'excel',
        text: 'Excel',
        className: 'btn btn-secondary btn-stock'
      },
      {
        extend: 'pdf',
        text: 'PDF',
        className: 'btn btn-secondary btn-stock'
      },
      {
        extend: 'print',
        text: 'Imprimir',
        className: 'btn btn-secondary btn-stock'
      }
    ],
    language: spanish // Usar los textos en español definidos arriba

  });


  // Oculta la tabla de  por defecto y sus botones
  $('#stock').hide();
  $('.btn-stock').hide();
  // entries
  $('#stock_wrapper').hide();


  // Al hacer click en el enlace  muestra la tabla2 correspondiente y sus botones
  $('#liTotal').on('click', function() {
    $('#stock').hide();
    $('#total').show();
    $('#total_wrapper').show();
    $('#stock_wrapper').hide();

    

  });
    
  // Al hacer click en el enlace muestra la tabla1 correspondiente y sus botones
  $('#liStock').on('click', function() {
    $('#total').hide();
    $('#total_wrapper').hide();
    $('#stock').show();
    $('#stock_wrapper').show();
    $('.btn-stock').show();


  });
});


// dynamic color tab animation
var tabs = document.querySelectorAll('.nav-link');

for (var i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener('click', function(event) {
    var currentActive = document.querySelector('.nav-link.active');
    currentActive.classList.remove('active');
    currentActive.classList.remove('blue-bg');

    this.classList.add('active');

  });
}



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
    #btnAdd {
  position: relative;
  left: 490px;
  top: 10px;
}

.blue-bg {
  background-color: blue;
}

.red-bg {
  background-color: red;
}




</style>