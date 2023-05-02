<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Proveedores</title>
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
            <a id="liStock" class="nav-link active" data-bs-toggle="tab" href="#stock" role="tab" aria-controls="stock" aria-selected="true">Total</a>
        </li>
        <li class="nav-item">
            <a id="liShortage" class="nav-link" data-bs-toggle="tab" href="#shortage" role="tab" aria-controls="shortage" aria-selected="false">Stock</a>
        </li>
    </ul>
</div>
<div class="container mt-5">
  <button id="btnAdd" class="btn btn-primary mb-3">Añadir Articulo</button>
  <table id="stock" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        <th>#</th>
          <th>Producto</th>
          <th>Categoria</th>
          <th>$Provedor</th>
          <th>$Venta </th>
          <th>Stock</th>   
        </tr>
      </thead>
      <tbody>

@foreach ($productos as $Articulo)
      <tr>
          <td>{{$Articulo->id_producto}}</td>
          <td>{{$Articulo->nombre_producto}}</td>
          <td>{{$Articulo->categoria}}</td>
          <td>{{$Articulo->precio_proveedor}}</td>
          <td>{{$Articulo->precio_venta}}</td>
          <td>{{$Articulo->stock_producto}}</td>

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

  <script>
    $(document).ready(function() {
      $('#stock').DataTable();
    });
    $('#btnAdd').click(function() {
    var modulo = $('#modulo').val();
    var campo = $('#campo').val();
    var operacion = $('#operacion').val();
    var fecha = $('#fecha').val();
    
    // Agrega una nueva fila a la tabla con los valores ingresados
    $('#stock').DataTable().row.add([
      modulo,
      campo,
      operacion,
      fecha
    ]).draw(false);
    
    // Limpia los campos de entrada
    $('#modulo').val('');
    $('#campo').val('');
    $('#operacion').val('');
    $('#fecha').val('');
  });
    
  </script>

</body>
</html>


<style>
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

</style>