<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Provedores</title>
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
            <a id="liStock" class="nav-link active" data-bs-toggle="tab" href="#stock" role="tab" aria-controls="stock" aria-selected="true">Stock</a>
        </li>
        <li class="nav-item">
            <a id="liShortage" class="nav-link" data-bs-toggle="tab" href="#shortage" role="tab" aria-controls="shortage" aria-selected="false">Faltantes</a>
        </li>
    </ul>
</div>
  <div class="container mt-5">
    <table id="stock" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>MODULO</th>
          <th>CAMPO</th>
          <th>OPERACION</th>
          <th>FECHA</th>
        
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>SISTEMA</td>
          <td>EVENTO DEL SISTEMA</td>
          <td>INICIO DE SESION</td>
          <td>13-10-2017</td>
        
        </tr>
      </tbody>
    </table>
    <div class="container mt-5">
    <table id="shortage" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>MODULO</th>
          <th>CAMPO</th>
          <th>OPERACION</th>
          <th>FECHA</th>
        
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>A</td>
          <td>EVENTO DEL SISTEMA</td>
          <td>INICIO DE SESION</td>
          <td>13-10-2017</td>
        
        </tr>
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
  <script  src="./script.js"></script>

  <script>
  $(document).ready(function() {
  $('#stock').DataTable( {
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'copy',
        text: 'Copiar',
        className: 'btn btn-secondary'
      },
      {
        extend: 'csv',
        text: 'CSV',
        className: 'btn btn-secondary'
      },
      {
        extend: 'excel',
        text: 'Excel',
        className: 'btn btn-secondary'
      },
      {
        extend: 'pdf',
        text: 'PDF',
        className: 'btn btn-secondary'
      },
      {
        extend: 'print',
        text: 'Imprimir',
        className: 'btn btn-secondary'
      }
    ],
    language: {
      buttons: {
        copyTitle: 'Copiado al portapapeles',
        copySuccess: {
          _: '%d filas copiadas',
          1: '1 fila copiada'
        }
      }
    }
  });
});

 // Oculta la tabla de Archivado por defecto
 $('#shortage').hide();
    
    // Al hacer click en el enlace de En Trámite muestra la tabla correspondiente
    $('#liStock').on('click', function() {
      $('#shortage').hide();
      $('#stock').show();
    });
    
    // Al hacer click en el enlace de Archivado muestra la tabla correspondiente
    $('#liShortage').on('click', function() {
      $('#stock').hide();
      $('#shortage').show();
    });

  </script>

</body>
</html>

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

    
</style>