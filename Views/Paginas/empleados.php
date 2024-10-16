
<div class="content" style="min-height: 717px;">
    <section class="content-header">
    <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1>Personal</h1>
                    </div>
                </div>
          
                <!-- Tabla de Bootstrap -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Lista de Empleados</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- Combo para seleccionar el filtro -->
                                    <select id="filtro" class="form-control">
                                        <option value="empleados">Empleados</option>
                                        <option value="vestuario">Vestuario</option>
                                        <option value="padrones">Padrones</option>
                                        <option value="trayectoria">Trayectoria</option>
                                    </select>
                                    <br>
                                </div>
                            </div>


                            <div class="table-responsive">
                               <table id="empleados-table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Número Empleado</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Curp</th>
                                            <th>RFC</th>
                                            <th>Plaza</th>
                                            <th>Puesto</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Estado Civil</th>
                                            <th>Hijos</th>
                                            <th>Fecha Inicio</th>
                                            <th>Acciones</th>
                                            <th>ver hijos</th>
                                            <th>ver vestuario</th>
                                        </tr>
                                    </thead>
                                    <tbody id="empleados-tbody">
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </section>
</div>

  <!-- Modal para edición -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-form">
                        <input type="hidden" id="edit-id" name="id">
                        <div class="form-group">
                            <label for="edit-numempleado">Número Empleado</label>
                            <input type="text" class="form-control" id="edit-numempleado" name="numempleado" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-nombre">Nombre</label>
                            <input type="text" class="form-control" id="edit-nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-apaterno">Apellido Paterno</label>
                            <input type="text" class="form-control" id="edit-apaterno" name="apaterno" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-amaterno">Apellido Materno</label>
                            <input type="text" class="form-control" id="edit-amaterno" name="amaterno" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-curp">Curp</label>
                            <input type="text" class="form-control" id="edit-curp" name="curp" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-rfc">RFC</label>
                            <input type="text" class="form-control" id="edit-rfc" name="rfc" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-plaza">Plaza</label>
                            <input type="text" class="form-control" id="edit-plaza" name="plaza" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-puesto">Puesto</label>
                            <input type="text" class="form-control" id="edit-puesto" name="puesto" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-telefono">Telefono</label>
                            <input type="text" class="form-control" id="edit-telefono" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-email">Email</label>
                            <input type="email" class="form-control" id="edit-email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-estadocivil">Estado Civil</label>
                            <input type="text" class="form-control" id="edit-estadocivil" name="estadocivil" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-hijos">Hijos</label>
                            <input type="number" class="form-control" id="edit-hijos" name="hijos" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-fechin">Fecha Inicio</label>
                            <input type="date" class="form-control" id="edit-fechin" name="fechin" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal para ver hijos -->
  <div class="modal fade" id="hijosModal" tabindex="-1" role="dialog" aria-labelledby="hijosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hijosModalLabel">Hijos del Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>FechaNacimiento</th>
                            </tr>
                        </thead>
                        <tbody id="hijos-tbody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
  <div class="modal fade" id="vestuariosModal" tabindex="-1" role="dialog" aria-labelledby="vestuariosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hijosModalLabel">Vestuarios del Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Vestuario</th>
                                <th>Orden</th>
                            </tr>
                        </thead>
                        <tbody id="vestuarios-tbody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>

<script>
    $(document).ready(function() {

        loadEmployees();

        $('#filtro').change(function() {
            if ($.fn.DataTable.isDataTable('#empleados-table')) {
                $('#empleados-table').DataTable().clear().destroy();
            }
          loadEmployees();
        });

        function loadEmployees() {
            var filtro = $('#filtro').val();
            $.ajax({
                url: '../GESTION_EMPLEADOS/Controllers/GetEmpleados.php',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        var tbody = $('#empleados-tbody');
                        tbody.empty();
                     
                        response.data.forEach(function(empleado) {
                            if (filtro === 'padrones') {
                                if (empleado.hijos > 0) {
                                    agregarFilaEmpleado(empleado, tbody);
                                }
                            } else {
                                agregarFilaEmpleado(empleado, tbody);
                            }
                        });

                        $('.edit-btn').click(function() {
                            var id = $(this).data('id');
                            showEditModal(id);
                        });
              
                        $('.hijos-btn').click(function() {
                            var numempleado = $(this).data('id');
                            showHijosModal(numempleado);
                        });

                        $('.vestuario-btn').click(function() {
                            var numempleado = $(this).data('id');
                            showVestuarioModal(numempleado);
                        });


                        $('#empleados-table').DataTable({
                            "stateSave": true,
                            "language": {
                                "search": "Buscar:",
                                "lengthMenu": "Mostrar _MENU_ registros por página",
                                "zeroRecords": "No se encontraron resultados",
                                "info": "Mostrando página _PAGE_ de _PAGES_",
                                "infoEmpty": "No hay registros disponibles",
                                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Último",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }
                            }
                        });

                    } else {
                        console.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error al cargar los datos:', error);
                }
            });
        }

        function agregarFilaEmpleado(empleado, tbody) {
                var row = `<tr>
                    <td>${empleado.numempleado}</td>
                    <td>${empleado.nombre}</td>
                    <td>${empleado.apaterno}</td>
                    <td>${empleado.amaterno}</td>
                    <td>${empleado.curp}</td>
                    <td>${empleado.rfc}</td>
                    <td>${empleado.plaza}</td>
                    <td>${empleado.puesto}</td>
                    <td>${empleado.telefono}</td>
                    <td>${empleado.email}</td>
                    <td>${empleado.estadocivil}</td>
                    <td>${empleado.hijos}</td>
                    <td>${empleado.fechin}</td>
                    <td><button class="btn btn-warning btn-sm edit-btn" data-id="${empleado.id_usuario}">Editar</button></td>
                    <td><button class="btn btn-info btn-sm hijos-btn" data-id="${empleado.numempleado}">Ver Hijos</button></td>
                    <td><button class="btn btn-info btn-sm vestuario-btn" data-id="${empleado.numempleado}">Ver vestuarios</button></td>
                </tr>`;
                tbody.append(row);
       }

        function showEditModal(id) {
            $.ajax({
                url: '../GESTION_EMPLEADOS/Controllers/GetEmpleadoById.php',
                method: 'GET',
                data: { id: id },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        var empleado = response.data;
                        $('#edit-id').val(empleado.id_usuario);
                        $('#edit-numempleado').val(empleado.numempleado);
                        $('#edit-nombre').val(empleado.nombre);
                        $('#edit-apaterno').val(empleado.apaterno);
                        $('#edit-amaterno').val(empleado.amaterno);
                        $('#edit-curp').val(empleado.curp);
                        $('#edit-rfc').val(empleado.rfc);
                        $('#edit-plaza').val(empleado.plaza);
                        $('#edit-puesto').val(empleado.puesto);
                        $('#edit-telefono').val(empleado.telefono);
                        $('#edit-email').val(empleado.email);
                        $('#edit-estadocivil').val(empleado.estadocivil);
                        $('#edit-hijos').val(empleado.hijos);
                        $('#edit-fechin').val(empleado.fechin);
                        $('#editModal').modal('show');
                    } else {
                        console.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error al cargar los datos del empleado:', error);
                }
            });
        }

        function showHijosModal(numempleado) {
            $.ajax({
                url: '../GESTION_EMPLEADOS/Controllers/GetHijosEmpleado.php',
                method: 'GET',
                data: { NumeroEmpleado: numempleado },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        var hijos = response.data;
                        console.log(hijos)
                        var tbody = $('#hijos-tbody');
                        tbody.empty();
                        hijos.forEach(function(hijo) {
                            var row = `<tr>
                                <td>${hijo.NombreHijo}</td>
                                <td>${hijo.FechaNacimiento}</td>
                            </tr>`;
                            tbody.append(row);
                        });
                        $('#hijosModal').modal('show');
                    } else {
                        console.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error al cargar los datos de los hijos:', error);
                }
            });
        }

        function showVestuarioModal(numempleado) {
            $.ajax({
                url: '../GESTION_EMPLEADOS/Controllers/GetVestuarioEmpleado.php',
                method: 'GET',
                data: { NumeroEmpleado: numempleado },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        var vestuarios = response.data;
                        console.log(vestuarios)
                        var tbody = $('#vestuarios-tbody');
                        tbody.empty();
                        vestuarios.forEach(function(ves) {
                            var row = `<tr>
                                <td>${ves.Vestuario}</td>
                                <td>${ves.Orden}</td>
                            </tr>`;
                            tbody.append(row);
                        });
                        $('#vestuariosModal').modal('show');
                    } else {
                        console.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error al cargar los datos de los vestuarios:', error);
                }
            });
        }

        $('#edit-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '../GESTION_EMPLEADOS/Controllers/UpdateEmpleado.php',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        $('#editModal').modal('hide');
                        loadEmployees();
                    } else {
                        console.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error al actualizar los datos:', error);
                }
            });
        });
    });
</script>
