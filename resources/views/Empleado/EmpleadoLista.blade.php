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
            <th>Acciones</th>
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
            <td>
              <form id="deleteForm-{{$listempleados->id_usuario}}" action="{{ route('EmpleadoEliminar', $listempleados->id_usuario) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmDelete(event, {{$listempleados->id_usuario}})" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                  <i class="fas fa-trash"></i>
                  Eliminar
                </button>
              </form>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{$listempleados->id_usuario}}">
                <i class="fas fa-edit"></i>
                Editar
              </button>

              <!-- Modal para la edición -->
              <div class="modal fade" id="editModal-{{$listempleados->id_usuario}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editModalLabel">Editar Empleado</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Aquí colocas tu formulario de edición -->
                      <form action="{{ route('EmpleadoActualizar', $listempleados->id_usuario) }}" method="POST">
                        @csrf
                        <!-- Campos del formulario -->

                        <div class="mb-3">
                          <label for="usuario" class="form-label">Nombre</label>
                          <input type="text" class="form-control" id="usuario" name="usuario" value="{{$listempleados->usuario}}">
                        </div>


                        <div class="mb-3">
                          <label for="Curp" class="form-label">CURP</label>
                          <input type="text" class="form-control" id="Curp" name="Curp" value="{{$listempleados->Curp}}">
                        </div>

                        <div class="mb-3">
                          <label for="RFC" class="form-label">RFC</label>
                          <input type="text" class="form-control" id="RFC" name="RFC" value="{{$listempleados->RFC}}">
                        </div>

                        <div class="mb-3">
                          <label for="Cargo" class="form-label">Cargo</label>
                          <input type="text" class="form-control" id="Cargo" name="Cargo" value="{{$listempleados->Cargo}}">
                        </div>

                        <div class="mb-3">
                          <label for="Telefono" class="form-label">Teléfono</label>
                          <input type="text" class="form-control" id="Telefono" name="Telefono" value="{{$listempleados->Telefono}}">
                        </div>

                        <div class="mb-3">
                          <label for="Sucursal" class="form-label">Sucursal</label>
                          <select class="form-control" id="Sucursal" name="Sucursal" >
                            @foreach ($sucursales2 as $sucursal)
                            <option value="{{ $sucursal->nombre_sucursal }}" {{ $sucursal->nombre_sucursal === $listempleados->nombre_sucursal ? 'selected' : '' }}>
                              {{ $sucursal->nombre_sucursal }}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="editarRegistro({{$listempleados->id_usuario}})">Guardar</button>

                    </div>
                  </div>
                </div>
              </div>
            </td>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>




<script>
  $(document).ready(function() {


    // Definir los textos en español
    var spanish = {
      "decimal": "",
      "emptyTable": "No hay datos disponibles en la tabla",
      "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "infoEmpty": "Mostrando 0 registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ registros",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "No se encontraron registros coincidentes",
      "paginate": {
        "first": "Primera",
        "last": "Última",
        "next": "Siguiente",
        "previous": "Anterior"
      },
      "aria": {
        "sortAscending": ": activar para ordenar la columna en orden ascendente",
        "sortDescending": ": activar para ordenar la columna en orden descendente"
      }
    };
    // Inicializar las dos tablas
    $('#total').DataTable({

      dom: 'Bfrtip',
      buttons: [{
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

  function confirmDelete(event) {
    event.preventDefault();
    Swal.fire({
      title: '¿Estás seguro de eliminar este registro?',
      imageUrl: '/img/SweetStar2.png',
      imageWidth: 100,
      imageHeight: 100,
      imageAlt: 'Custom image',
      showCancelButton: true,
      cancelButtonColor: '#656665',
      confirmButtonColor: '#9f2241',
      confirmButtonText: 'Eliminar',
      cancelButtonText: 'Cancelar',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById('deleteForm').submit();
      }
    });
  }


  function editarRegistro(id) {
  // Obtener el formulario de edición del registro específico
  var editForm = document.getElementById('editForm-' + id);

  // Enviar el formulario
  editForm.submit();
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


  .blue-bg {
    background-color: blue;
  }

  .red-bg {
    background-color: red;
  }
</style>