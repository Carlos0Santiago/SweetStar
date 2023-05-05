<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Provedores</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css'>
</head>

<body>
<div class="title">
  <h1>Provedores</h1>

  <div class="table-responsive" style="text-transform: uppercase;">
    <ul class="nav nav-pills" id="tabsExp" role="tablist">
        <li class="nav-item">
            <a id="liActual" class="nav-link active" data-bs-toggle="tab" href="#actual" role="tab" aria-controls="actual" aria-selected="true">Provedores</a>
        </li>
        <li class="nav-item">
            <a id="liArchivado" class="nav-link" data-bs-toggle="tab" href="#archivado" role="tab" aria-controls="archivado" aria-selected="false">Archivados</a>
        </li>
    </ul>
</div>

<div class="container mt-5">
    <table id="actual" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>MODULO</th>
          <th>CAMPO</th>
          <th>OPERACION</th>
          <th>FECHA</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>SISTEMA</td>
          <td>EVENTO DEL SISTEMA</td>
          <td>INICIO DE SESION</td>
          <td>13-10-2017</td>
          <td>
            <button class="btnEdit">Editar</button> 
            <button class="btnArch">Archivar</button>
          </td>
        </tr>
      </tbody>
    </table>

    
<div class="container mt-5">
    <table id="archivado" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>MODULO</th>
          <th>CAMPO</th>
          <th>OPERACION</th>
          <th>FECHA</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>A</td>
          <td>EVENTO DEL SISTEMA</td>
          <td>INICIO DE SESION</td>
          <td>13-10-2017</td>
          <td>
            <button class="btn btn-primary btn-sm">Editar</button>
          <button class="btn btn-secondary btn-sm">Archivar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>

   <!-- Search and js -->
  <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
  <script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js'></script>

  <script  src="./script.js"></script>

</body>
</html>

<script>
    $(document).ready(function() {
      $('#actual').DataTable();
    });

     // Oculta la tabla de Archivado por defecto
     $('#archivado').hide();
    
    // Al hacer click en el enlace de En Trámite muestra la tabla correspondiente
    $('#liActual').on('click', function() {
      $('#archivado').hide();
      $('#actual').show();
    });
    
    // Al hacer click en el enlace de Archivado muestra la tabla correspondiente
    $('#liArchivado').on('click', function() {
      $('#actual').hide();
      $('#archivado').show();
    });
  </script>

<style>
    
    .btnEdit, .btnArch {
  display: inline-block;
  text-align: center;
  padding: 8px 12px;
  margin-right: 10px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  font-size: 15px;
  font-family: sans-serif;
  letter-spacing: 1px;
  width: 80px; /* agrega esta propiedad para que ambos botones tengan el mismo ancho */
  height: 40px;
}

.btnEdit {
  background-color: #008080;
  color: #FFFFFF;
}

.btnArch {
  background-color: #800080;
  color: #FFFFFF;
}

.btnEdit:hover, .btnArch:hover {
  background-color: #056bfa49;
}

.title {
  text-align: center;
  margin-top: 50px;
  
}

.title h1 {
  font-size: 36px;
  font-weight: bold;
}

.table-responsive {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 5vh;
    }

</style>