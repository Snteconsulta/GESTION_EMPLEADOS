
<div class="content" style="min-height: 717px;">
    <section class="content-header">
    <div id="config" data-url-controller="<?= URL_CONTROLER; ?>"></div>
    <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1>Personal</h1>
                    </div>
                </div>
                            <!-- Contenedor para ambos botones -->
      
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <button class="btn btn-success add-employee-btn flex-fill">Agregar Empleado</button>
                    <button class="btn btn-primary export-excel-btn flex-fill">Empleados</button>
                    <button class="btn btn-primary export-vestuarios-btn flex-fill">Vestuarios</button>
                    <button class="btn btn-primary export-phombres-btn flex-fill">Padrones Padres</button>
                    <button class="btn btn-primary export-pmujeres-btn flex-fill">Patrones Madres</button>
                    <button class="btn btn-primary export-phijos-btn flex-fill">Padrones Hijos</button>
                    <button class="btn btn-primary export-zi-btn flex-fill">Zonas Insalubres</button>
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
                                <div class="col-sm-2">
                                    <!-- Combo para seleccionar el filtro -->
                                    <select id="filtro" class="form-control">
                                        <option value="empleados">Empleados</option>
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
                                            <th>Delegación</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Plaza</th>
                                            <th>Puesto</th>
                                            <th>Trayectoria</th>
                                            <th>Fecha Inicio</th>
                                            <th>Acciones</th>
                                            <th>Hijos</th>
                                            <th>Vestuario</th>
                                            <th>ZI</th>
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

   <!-- Modal para agregar nuevo empleado -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Agregar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add-employee-form">
                    <div class="form-group">
                        <label for="add-numempleado">Número Empleado</label>
                        <input type="text" class="form-control" id="add-numempleado" name="numempleado"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-nombre">Nombre</label>
                        <input type="text" class="form-control" id="add-nombre" name="nombre"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-apaterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="add-apaterno" name="apaterno"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-amaterno">Apellido Materno</label>
                        <input type="text" class="form-control" id="add-amaterno" name="amaterno"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-Sexo">Sexo</label>
                        <input type="text" class="form-control" id="add-Sexo" name="Sexo"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-curp">Curp</label>
                        <input type="text" class="form-control" id="add-curp" name="curp"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-rfc">RFC</label>
                        <input type="text" class="form-control" id="add-rfc" name="rfc"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-plaza">Plaza</label>
                        <input type="text" class="form-control" id="add-plaza" name="plaza"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-puesto">Puesto</label>
                        <input type="text" class="form-control" id="add-puesto" name="puesto"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-telefono">Telefono</label>
                        <input type="text" class="form-control" id="add-telefono" name="telefono"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-email">Email</label>
                        <input type="email" class="form-control" id="add-email" name="email"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-estadocivil">Estado Civil</label>
                        <input type="text" class="form-control" id="add-estadocivil" name="estadocivil"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-hijos">Hijos</label>
                        <input type="number" class="form-control" id="add-hijos" name="hijos"   style="text-transform: uppercase;" required>
                    </div>
                    <div class="form-group">
                        <label for="add-fechin">Fecha Inicio</label>
                        <input type="date" class="form-control" id="add-fechin" name="fechin" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
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
                            <input type="text" class="form-control" id="edit-numempleado" name="numempleado"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-nombre">Nombre</label>
                            <input type="text" class="form-control" id="edit-nombre" name="nombre"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-apaterno">Apellido Paterno</label>
                            <input type="text" class="form-control" id="edit-apaterno" name="apaterno"  style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-amaterno">Apellido Materno</label>
                            <input type="text" class="form-control" id="edit-amaterno" name="amaterno"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-Sexo">Sexo</label>
                            <input type="text" class="form-control" id="edit-Sexo" name="Sexo"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-curp">Curp</label>
                            <input type="text" class="form-control" id="edit-curp" name="curp"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-rfc">RFC</label>
                            <input type="text" class="form-control" id="edit-rfc" name="rfc"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-plaza">Plaza</label>
                            <input type="text" class="form-control" id="edit-plaza" name="plaza"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-puesto">Puesto</label>
                            <input type="text" class="form-control" id="edit-puesto" name="puesto"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-telefono">Telefono</label>
                            <input type="text" class="form-control" id="edit-telefono" name="telefono"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-email">Email</label>
                            <input type="email" class="form-control" id="edit-email" name="email"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-estadocivil">Estado Civil</label>
                            <input type="text" class="form-control" id="edit-estadocivil" name="estadocivil"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-hijos">Hijos</label>
                            <input type="number" class="form-control" id="edit-hijos" name="hijos"   style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-trayectoria">Trayectoria</label>
                            <textarea class="form-control" id="edit-trayectoria" name="trayectoria" rows="4"   style="text-transform: uppercase;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit-fechin">Fecha Inicio</label>
                            <input type="date" class="form-control" id="edit-fechin" name="fechin"  style="text-transform: uppercase;" required>
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
                <input type="text" name="num_empleado" id="num_empleado" value=""> 
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>FechaNacimiento</th>
                                <th>Acta de Nacimiento</th>
                                <th>Subir PDF</th>
                            </tr>
                        </thead>
                        <tbody id="hijos-tbody">
                        </tbody>
                    </table>
                </div>
                <hr>
                <h5>Agregar Nuevo Hijo</h5>
                <form id="add-hijo-form">
                    <div class="form-group">
                        <label for="nombre-hijo">Nombre del Hijo</label>
                        <input type="text" class="form-control" id="nombre-hijo" name="nombre-hijo" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha-nacimiento-hijo">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha-nacimiento-hijo" name="fecha-nacimiento-hijo" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Hijo</button>
                </form>
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
                   <input type="text" name="num_empleado_v" id="num_empleado_v" value=""> 
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
                    <hr>
                    <h5>Agregar Nuevo Vestuario</h5>
                    <form id="add-vestuario-form">
                        <div class="form-group">
                            <label for="nombre-vestuario">Nombre del Vestuario</label>
                            <input type="text" class="form-control" id="nombre-vestuario" name="nombre-vestuario" required>
                        </div>
                        <div class="form-group">
                            <label for="orden-vestuario">Orden</label>
                            <input type="text" class="form-control" id="orden-vestuario" name="orden-vestuario" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Vestuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>

   <div class="modal fade" id="ZiModal" tabindex="-1" role="dialog" aria-labelledby="ZiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ZiModalLabel">Empleados en Zonas insalubres </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                   <input type="text" name="num_empleado_vzi" id="num_empleado_vzi" value=""> 
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Adscripcion</th>
                                <th>Actividad</th>
                                <th>Motivo</th>
                            </tr>
                        </thead>
                        <tbody id="zi-tbody">
                        </tbody>
                    </table>
                    <hr>
                    <h5>Añadir</h5>
                    <form id="add-zi-form">
                        <div class="form-group">
                            <label for="Adscripcion-zi">Adscripcion</label>
                            <input type="text" class="form-control" id="Adscripcion-zi" name="Adscripcion-zi" required>
                        </div>
                        <div class="form-group">
                            <label for="Actividad-zi">Actividad</label>
                            <input type="text" class="form-control" id="Actividad-zi" name="Actividad-zi" required>
                        </div>
                        <div class="form-group">
                            <label for="Motivo-zi">Motivo</label>
                            <input type="text" class="form-control" id="Motivo-zi" name="Motivo-zi" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.24/jspdf.plugin.autotable.min.js"></script>
<script>
    const urlController = document.getElementById('config').dataset.urlController;
    $(document).ready(function() {
        
            console.log("URL_CONTROLER:", urlController);

            loadEmployees();

            $('#filtro').change(function() {
                if ($.fn.DataTable.isDataTable('#empleados-table')) {
                    $('#empleados-table').DataTable().clear().destroy();
                }
            loadEmployees();
            });
        
            $('.add-employee-btn').click(function() {
                $('#addEmployeeModal').modal('show');
            });

            $('.export-excel-btn').click(function() {
                // Realizar la consulta AJAX para obtener todos los empleados
                    $.ajax({
                        url: `${urlController}/GetEmpleados.php`,
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                // Crear una hoja de datos para el archivo PDF
                                var data = response.data;

                                // Crear encabezados para la tabla
                                var headers = [
                                    ["Número Empleado", "Delegación", "Nombre", "Apellido Paterno", 
                                    "Apellido Materno", "Curp", "RFC", "Plaza", "Puesto", 
                                    "Teléfono", "Email", "Estado Civil", "Hijos", 
                                    "Trayectoria", "Fecha Inicio"]
                                ];

                                // Crear un array que contendrá todos los datos
                                var rows = data.map(function(empleado) {
                                    return [
                                        empleado.numempleado, empleado.Delegacion, empleado.nombre,
                                        empleado.apaterno, empleado.amaterno, empleado.curp,
                                        empleado.rfc, empleado.plaza, empleado.puesto,
                                        empleado.telefono, empleado.email, empleado.estadocivil,
                                        empleado.hijos, empleado.Trayectoria, empleado.fechin
                                    ];
                                });

                                
                                // Inicializar jsPDF
                                var { jsPDF } = window.jspdf; // Asegúrate de que jsPDF está cargado correctamente desde la librería
                                var doc = new jsPDF({ orientation: 'landscape' }); // Orientación horizontal

                                // Agregar el título del documento
                                doc.setFontSize(18);
                                doc.text('Lista de Empleados', 14, 22);

                                // Usar autoTable para crear la tabla con encabezados y datos
                                doc.autoTable({
                                    head: headers,
                                    body: rows,
                                    startY: 30, // Posición inicial de la tabla
                                    theme: 'striped', // Tema de la tabla
                                    headStyles: { fillColor: [0, 0, 128] }, // Color de fondo de los encabezados
                                    margin: { top: 20 },
                                });

                                // Descargar el archivo PDF
                                doc.save('Lista_Empleados.pdf');
                            } else {
                                console.error(response.message);
                                alert(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al cargar los datos:', error);
                        }
                    });
            });

            $('.export-vestuarios-btn').click(function() { 
                    $.ajax({
                        url: `${urlController}/ReporteVesturioEmpleados.php`,
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                var data = response.data;

                                // Agrupar los datos por empleado
                                var empleados = {};
                                data.forEach(function(item) {
                                    if (!empleados[item.NumeroEmpleado]) {
                                        empleados[item.NumeroEmpleado] = {
                                            NumeroEmpleado: item.NumeroEmpleado,
                                            NombreEmpleado: item.NombreEmpleado,
                                            Vestuario: []
                                        };
                                    }
                                    // Añadir cada artículo de vestuario al empleado correspondiente
                                    empleados[item.NumeroEmpleado].Vestuario.push({
                                        NombreVestuario: item.NombreVestuario,
                                        Orden: item.Orden
                                    });
                                });

                                // Inicializar jsPDF
                                var { jsPDF } = window.jspdf;
                                var doc = new jsPDF({ orientation: 'portrait' });

                                // Configuración de encabezado
                                doc.setFontSize(18);
                                doc.text('Lista de Empleados y su Vestuario', 14, 22);

                                let startY = 30; // Posición inicial Y

                                // Para cada empleado, generar las tablas
                                Object.values(empleados).forEach((empleado) => {
                                    // Tabla de datos del empleado
                                    doc.autoTable({
                                        head: [['Número Empleado', 'Nombre']],
                                        body: [[empleado.NumeroEmpleado, empleado.NombreEmpleado]],
                                        startY: startY,
                                        theme: 'plain',
                                        margin: { top: 30 }
                                    });

                                    // Actualiza la posición Y para la siguiente tabla
                                    startY = doc.lastAutoTable.finalY + 10; // Espacio entre tablas

                                    // Tabla de vestuario del empleado
                                    doc.autoTable({
                                        head: [['Vestuario', 'Orden']],
                                        body: empleado.Vestuario.map(v => [v.NombreVestuario, v.Orden]),
                                        startY: startY,
                                        theme: 'striped',
                                        headStyles: { fillColor: [0, 0, 128] },
                                    });

                                    // Actualiza la posición Y para el siguiente empleado
                                    startY = doc.lastAutoTable.finalY + 20; // Espacio entre diferentes empleados
                                });

                                // Descargar el archivo PDF
                                doc.save('Lista_Empleados_Vestuario.pdf');
                            } else {
                                console.error(response.message);
                                alert(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al cargar los datos:', error);
                        }
                    });
            });

            $('.export-phombres-btn').click(function() {
                    // Realizar la consulta AJAX para obtener todos los empleados
                    $.ajax({
                        url: `${urlController}/ReportePadronesHombres.php`,
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                var data = response.data;

                                // Crear encabezados para la tabla
                                var headers = [
                                    ["Delegación", "Número Empleado", "Nombre completo"]
                                ];

                                // Crear un array que contendrá todos los datos
                                var rows = data.map(function(empleado) {
                                    return [
                                        empleado.Delegacion, empleado.numempleado, empleado.NombreEmpleado,
                                    ];
                                });

                                // Inicializar jsPDF
                                var { jsPDF } = window.jspdf; // Asegúrate de que jsPDF está cargado correctamente desde la librería
                                var doc = new jsPDF({ orientation: 'landscape' }); // Orientación horizontal

                                // Agregar el título del documento
                                doc.setFontSize(18);
                                doc.text('Lista de Empleados', 14, 22);

                                // Usar autoTable para crear la tabla con encabezados y datos
                                doc.autoTable({
                                    head: headers,
                                    body: rows,
                                    startY: 30, // Posición inicial de la tabla
                                    theme: 'striped', // Tema de la tabla
                                    headStyles: { fillColor: [0, 0, 128] }, // Color de fondo de los encabezados
                                    margin: { top: 20 },
                                });

                                // Descargar el archivo PDF
                                doc.save('Lista_Empleados_Hombres.pdf');
                            } else {
                                alert(response.message);
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al cargar los datos:', error);
                        }
                    });
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
                            <td>${empleado.Delegacion}</td>
                            <td>${empleado.nombre}</td>
                            <td>${empleado.apaterno}</td>
                            <td>${empleado.amaterno}</td>
                            <td>${empleado.plaza}</td>
                            <td>${empleado.puesto}</td>
                            <td>${empleado.Trayectoria}</td>
                            <td>${empleado.fechin}</td>
                            <td><button class="btn btn-warning btn-sm edit-btn" data-id="${empleado.id_usuario}">Editar</button></td>
                            <td><button class="btn btn-info btn-sm hijos-btn" data-id="${empleado.numempleado}">Ver Hijos</button></td>
                            <td><button class="btn btn-info btn-sm vestuario-btn" data-id="${empleado.numempleado}">Ver vestuarios</button></td>
                        </tr>`;
                        tbody.append(row);
            }

            $('.export-pmujeres-btn').click(function() {
                    // Realizar la consulta AJAX para obtener todos los empleados
                    $.ajax({
                        url: `${urlController}/ReportePadronesMujeres.php`,
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                var data = response.data;

                                var headers = [
                                    ["Delegación", "Número Empleado", "Nombre completo"]
                                ];

                                var rows = data.map(function(empleado) {
                                    return [
                                        empleado.Delegacion, empleado.numempleado, empleado.NombreEmpleado,
                                    ];
                                });

                                // Inicializar jsPDF
                                var { jsPDF } = window.jspdf; // Asegúrate de que jsPDF está cargado correctamente desde la librería
                                var doc = new jsPDF({ orientation: 'landscape' }); // Orientación horizontal

                                // Agregar el título del documento
                                doc.setFontSize(18);
                                doc.text('Lista de Empleados', 14, 22);

                                // Usar autoTable para crear la tabla con encabezados y datos
                                doc.autoTable({
                                    head: headers,
                                    body: rows,
                                    startY: 30, // Posición inicial de la tabla
                                    theme: 'striped', // Tema de la tabla
                                    headStyles: { fillColor: [0, 0, 128] }, // Color de fondo de los encabezados
                                    margin: { top: 20 },
                                });

                                // Descargar el archivo PDF
                                doc.save('Lista_Empleados_Hombres.pdf');
                            } else {
                                alert(response.message);
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al cargar los datos:', error);
                        }
                    });
            });

            $('.export-phijos-btn').click(function() {
                    // Realizar la consulta AJAX para obtener todos los empleados con hijos menores de 12 años
                    $.ajax({
                        url: `${urlController}/ReportePadronesHijos.php`,
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                var data = response.data;

                                // Crear encabezados para la tabla
                                var headers = [
                                    ["Delegación", "Nombre", "Nombre Hijo", "Fecha de Nacimiento"]
                                ];

                                // Crear un array que contendrá todos los datos
                                var rows = data.map(function(empleado) {
                                    return [
                                        empleado.Delegacion,
                                        empleado.NombreEmpleado,
                                        empleado.NombreHijo,
                                        empleado.FechaNacimiento
                                    ];
                                });

                                // Inicializar jsPDF
                                var { jsPDF } = window.jspdf; // Asegúrate de que jsPDF está cargado correctamente desde la librería
                                var doc = new jsPDF({ orientation: 'landscape' }); // Orientación horizontal

                                // Agregar el título del documento
                                doc.setFontSize(18);
                                doc.text('Padrones de Hijos Menores de 12 Años', 14, 22);

                                // Usar autoTable para crear la tabla con encabezados y datos
                                doc.autoTable({
                                    head: headers,
                                    body: rows,
                                    startY: 30, // Posición inicial de la tabla
                                    theme: 'striped', // Tema de la tabla
                                    headStyles: { fillColor: [0, 0, 128] }, // Color de fondo de los encabezados
                                    margin: { top: 20 },
                                });

                                // Descargar el archivo PDF
                                doc.save('Padrones_Hijos_Menores_12_Años.pdf');
                            } else {
                                alert(response.message);
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al cargar los datos:', error);
                        }
                    });
            });

            $('.export-zi-btn').click(function() {   
                $.ajax({
                    url: `${urlController}/ReporteZI.php`,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            var data = response.data;

                            // Inicializar jsPDF
                            var { jsPDF } = window.jspdf;
                            var doc = new jsPDF({ orientation: 'portrait' });

                            // Configuración de título
                            doc.setFontSize(18);
                            doc.setTextColor(40);
                            doc.text('Reporte de Zonas Insalubres', 105, 20, { align: 'center' });

                            let startY = 30; // Posición inicial Y

                            // Generar una tabla estilizada por cada empleado
                            data.forEach(item => {
                                // Colores de fondo para las filas
                                doc.setFillColor(200, 221, 242); // Color azul claro
                                doc.rect(10, startY, 190, 8, 'F'); // Fila de RFC y NOMBRE

                                doc.setFillColor(240, 240, 240); // Color gris claro
                                doc.rect(10, startY + 8, 190, 8, 'F'); // Fila ADSCRIPCION y ACTIVIDAD

                                doc.setFillColor(240, 240, 240); // Color gris claro
                                doc.rect(10, startY + 16, 190, 8, 'F'); // Fila MOTIVO

                                // Bordes generales
                                doc.setDrawColor(0); // Color negro para los bordes
                                doc.rect(10, startY, 190, 24); // Bordes del bloque

                                // Encabezados y valores
                                doc.setFont('helvetica', 'bold');
                                doc.setFontSize(10);

                                // Primera fila (RFC y NOMBRE)
                                doc.text('RFC:', 12, startY + 5);
                                doc.setFont('helvetica', 'normal');
                                doc.text(item.rfc || 'N/A', 30, startY + 5);

                                doc.setFont('helvetica', 'bold');
                                doc.text('NOMBRE:', 100, startY + 5);
                                doc.setFont('helvetica', 'normal');
                                doc.text(item.NombreEmpleado || 'N/A', 130, startY + 5);

                                // Segunda fila (ADSCRIPCION y ACTIVIDAD)
                                doc.setFont('helvetica', 'bold');
                                doc.text('ADSCRIPCIÓN:', 12, startY + 13);
                                doc.setFont('helvetica', 'normal');
                                doc.text(item.Adscripcion || 'N/A', 40, startY + 13);

                                doc.setFont('helvetica', 'bold');
                                doc.text('ACTIVIDAD:', 100, startY + 13);
                                doc.setFont('helvetica', 'normal');
                                doc.text(item.Actividad || 'N/A', 130, startY + 13);

                                // Tercera fila (MOTIVO)
                                doc.setFont('helvetica', 'bold');
                                doc.text('MOTIVO:', 12, startY + 21);
                                doc.setFont('helvetica', 'normal');
                                doc.text(item.Motivo || 'N/A', 30, startY + 21);

                                startY += 30; // Espaciado para el siguiente registro
                            });

                            // Descargar el archivo PDF
                            doc.save('Reporte_Zonas_Insalubres.pdf');
                        } else {
                            console.error(response.message);
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error al cargar los datos:', error);
                    }
                });
            });

            function loadEmployees() {
                    var filtro = $('#filtro').val();
                    $.ajax({
                        url: `${urlController}/GetEmpleados.php`,
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

                                $('.zi-btn').click(function() {
                                    var numempleado = $(this).data('id');
                                    showZIModal(numempleado);
                                });

                                $('#empleados-table').DataTable({
                                    "stateSave": true,
                                    "pageLength": 5,
                                    "lengthMenu": [5, 10, 25, 50], 
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
                            <td>${empleado.Delegacion}</td>
                            <td>${empleado.nombre}</td>
                            <td>${empleado.apaterno}</td>
                            <td>${empleado.amaterno}</td>
                            <td>${empleado.plaza}</td>
                            <td>${empleado.puesto}</td>
                            <td>${empleado.Trayectoria}</td>
                            <td>${empleado.fechin}</td>
                            <td><button class="btn btn-warning btn-sm edit-btn" data-id="${empleado.id_usuario}">Editar</button></td>
                            <td><button class="btn btn-info btn-sm hijos-btn" data-id="${empleado.numempleado}">Hijos</button></td>
                            <td><button class="btn btn-info btn-sm vestuario-btn" data-id="${empleado.numempleado}">Vestuarios</button></td>
                            <td><button class="btn btn-info btn-sm zi-btn" data-id="${empleado.numempleado}">ZI</button></td>
                        </tr>`;
                        tbody.append(row);


                                                // <th>Número Empleado</th>
                                                // <th>Delegación</th>
                                                // <th>Nombre</th>
                                                // <th>Apellido Paterno</th>
                                                // <th>Apellido Materno</th>
                                                // <th>Plaza</th>
                                                // <th>Puesto</th>
                                                // <th>Trayectoria</th>
                                                // <th>Fecha Inicio</th>
                                                // <th>Acciones</th>
                                                // <th>Hijos</th>
                                                // <th>Vestuario</th>
                                                // <th>ZI</th>
            }

            function showEditModal(id) {
                    $.ajax({
                        url: `${urlController}/GetEmpleadoById.php`,
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
                                $('#edit-trayectoria').val(empleado.Trayectoria);
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
                        url: `${urlController}/GetHijosEmpleado.php`,
                        method: 'GET',
                        data: { NumeroEmpleado: numempleado },
                        dataType: 'json',
                        success: function(response) {
                            var tbody = $('#hijos-tbody');

                            if (response.status === 'success') {
                                var hijos = response.data;
                        
                                tbody.empty();
                                var emptyRow = `<tr><td colspan="2" class="text-center">No hay registros de hijos.</td></tr>`;
                                if (hijos.length === 0) {
                                    tbody.append(emptyRow);
                                } else {
                                    hijos.forEach(function(hijo) {

                                    console.log(hijo.Actanacimiento)

                                    var actaContent = hijo.Actanacimiento && hijo.Actanacimiento !== "0" && hijo.Actanacimiento.trim() !== "" 
                                            ? `<a href="${hijo.Actanacimiento}" target="_blank">Ver Acta</a>` 
                                            : `<input type="file" class="form-control acta-nacimiento" accept=".pdf">`;


                                        var row = `<tr>
                                            <td>${hijo.NombreHijo}</td>
                                            <td>${hijo.FechaNacimiento}</td>
                                            <td>${actaContent}</td>
                                            <td><button class="btn btn-success upload-acta" ${hijo.Actanacimiento ? 'disabled' : ''}>Subir Acta</button></td>
                                            <!-- Campo oculto para el id del hijo -->
                                            <td style="display:none;"><input type="text" class="id-hijo" value="${hijo.IdHijo}"></td>
                                        </tr>`;

                                        tbody.append(row);
                                    });
                                }


                            // Habilitar el botón de "Subir Acta" cuando se selecciona un archivo
                                $(document).on('change', 'input[type="file"].acta-nacimiento', function() {
                                    var row = $(this).closest('tr'); // Obtener la fila de la tabla donde se hizo el cambio
                                    row.find('.upload-acta').prop('disabled', false); // Habilitar el botón "Subir Acta"
                                });

                                                // Lógica para subir el archivo cuando se hace clic en "Subir Acta"
                                $(document).on('click', '.upload-acta', function() {
                                    var row = $(this).closest('tr'); // Obtener la fila correspondiente
                                    var fileInput = row.find('input[type="file"].acta-nacimiento')[0]; // Obtener el input de archivo
                                    var idHijo = row.find('.id-hijo').val(); // Obtener el ID del hijo desde el campo oculto

                                    if (fileInput.files.length > 0) {
                                        var formData = new FormData();
                                        formData.append('acta-nacimiento', fileInput.files[0]); // Agregar el archivo PDF
                                        formData.append('nombre-hijo', row.find('td').eq(0).text()); // Obtener el nombre del hijo
                                        formData.append('fecha-nacimiento-hijo', row.find('td').eq(1).text()); // Obtener la fecha de nacimiento del hijo
                                        formData.append('id-hijo', idHijo); // Agregar el id_hijo al FormData

                                
                                        $.ajax({
                                            url: '../GESTION_EMPLEADOS/Controllers/UpdateActaNacimiento.php',
                                            type: 'POST',
                                            data: formData,
                                            contentType: false, // No establecer el tipo de contenido
                                            processData: false, // No procesar los datos, ya que estamos enviando FormData
                                            success: function(response) {
                                                console.log(response)
                                            
                                                var result = response;

                                                // Si la respuesta es exitosa, mostrar el enlace al archivo
                                                if (result.status === 'success') {
                                                    // Cambiar la celda del "Acta de Nacimiento" por un enlace al archivo
                                                    row.find('td').eq(2).html(`<a href="${result.acta_url}" target="_blank">Ver Acta</a>`);
                                                    row.find('.upload-acta').prop('disabled', true);
                                                    alert('Acta de nacimiento subida correctamente.');
                                                } else {
                                                    alert('Error al subir el archivo: ' + result.message);
                                                }
                                            },
                                            error: function() {
                                                alert('Hubo un error al cargar el archivo.');
                                            }
                                        });
                                    } else {
                                        alert('Por favor, seleccione un archivo para subir.');
                                    }
                                });

            
                            } else {
                                    tbody.empty();
                                    console.error(response.message);
                                    var errorRow = `<tr><td colspan="2" class="text-center">${response.message}</td></tr>`;
                                    tbody.append(errorRow);
                            }

                            $('#num_empleado').val(numempleado);
                            $('#hijosModal').modal('show');

                        },
                        error: function(xhr, status, error) {
                            console.error('Error al cargar los datos de los hijos:', error);
                        }
                });
            }

            function showVestuarioModal(numempleado) {
                    $.ajax({
                        url: `${urlController}/GetVestuarioEmpleado.php`,
                        method: 'GET',
                        data: { NumeroEmpleado: numempleado },
                        dataType: 'json',
                        success: function(response) {
                            var tbody = $('#vestuarios-tbody');

                            // Verificar si la respuesta fue exitosa
                            if (response.status === 'success') {
                                var vestuarios = response.data;

                                tbody.empty(); // Limpiar el tbody antes de agregar datos
                                var emptyRow = `<tr><td colspan="2" class="text-center">No hay registros de vestuarios.</td></tr>`;

                                if (vestuarios.length === 0) {
                                    tbody.append(emptyRow); // Agregar fila vacía si no hay datos
                                } else {
                                    vestuarios.forEach(function(ves) {
                                        var row = `<tr>
                                            <td>${ves.Vestuario}</td>
                                            <td>${ves.Orden}</td>
                                        </tr>`;
                                        tbody.append(row); // Agregar fila para cada vestuario
                                    });
                                }
                            } else {
                                tbody.empty(); // Limpiar el tbody en caso de error
                                console.error(response.message);
                                var errorRow = `<tr><td colspan="2" class="text-center">${response.message}</td></tr>`;
                                tbody.append(errorRow); // Agregar fila de error
                            }

                            $('#num_empleado_v').val(numempleado); // Establecer el número de empleado
                            $('#vestuariosModal').modal('show'); // Mostrar el modal
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al cargar los datos de los vestuarios:', error);
                            var tbody = $('#vestuarios-tbody');
                            tbody.empty();
                            var errorRow = `<tr><td colspan="2" class="text-center">Error al cargar los datos de los vestuarios.</td></tr>`;
                            tbody.append(errorRow); // Agregar fila de error si ocurre un fallo en la llamada AJAX
                        }
                    });
            }

            function showZIModal(numempleado) {

                    const urlController = document.getElementById('config').dataset.urlController;
                    $.ajax({
                        url: `${urlController}/GetZi.php`,
                        method: 'GET',
                        data: { NumeroEmpleado: numempleado },
                        dataType: 'json',
                        success: function(response) {

                            var tbody = $('#zi-tbody');

                    
                            if (response.status === 'success') {
                                var zi = response.data;

                                tbody.empty();
                                var emptyRow = `<tr><td colspan="2" class="text-center">No hay registros de vestuarios.</td></tr>`;

                                if (zi.length === 0) {
                                    tbody.append(emptyRow);
                                } else {
                                    zi.forEach(function(z) {
                                        var row = `<tr>
                                            <td>${z.Adscripcion}</td>
                                            <td>${z.Actividad}</td>
                                            <td>${z.Motivo}</td>
                                        </tr>`;
                                        tbody.append(row);
                                    });
                                }
                            } else {
                                tbody.empty();
                                console.error(response.message);
                                var errorRow = `<tr><td colspan="2" class="text-center">${response.message}</td></tr>`;
                                tbody.append(errorRow);
                            }

                            $('#num_empleado_vzi').val(numempleado);
                            $('#ZiModal').modal('show');
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al cargar los datos de los vestuarios:', error);
                            var tbody = $('#vestuarios-tbody');
                            tbody.empty();
                            var errorRow = `<tr><td colspan="2" class="text-center">Error al cargar los datos de los vestuarios.</td></tr>`;
                            tbody.append(errorRow);
                        }
                    });
            }

            $('#edit-form').submit(function(e) {
                    e.preventDefault();
                console.log($(this).serialize());

                    $.ajax({
                        url: `${urlController}/UpdateEmpleado.php`,
                        method: 'POST',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                $('#editModal').modal('hide');
                                if ($.fn.DataTable.isDataTable('#empleados-table')) {
                                $('#empleados-table').DataTable().clear().destroy();
                                }
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
            
            $('#add-employee-form').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: `${urlController}/AddEmpleado.php`,
                        method: 'POST',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function(response) {
                            console.log(response)
                            if (response.status === 'success') {
                                alert("Se agrego empleado correctamente")
                                $('#addEmployeeModal').modal('hide');
                                if ($.fn.DataTable.isDataTable('#empleados-table')) {
                                $('#empleados-table').DataTable().clear().destroy();
                                }
                                loadEmployees();
                            } else {
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al agregar el empleado:', error);
                        }
                    });
            });

            $('#add-hijo-form').submit(function(e) {
                    e.preventDefault(); 
                    const numempleado = $('#num_empleado').val();
                    console.log(numempleado)

                    $.ajax({
                        url: `${urlController}/AddHijo.php`,
                        method: 'POST',
                        data: {
                            nombre: $('#nombre-hijo').val(),
                            fecha_nacimiento: $('#fecha-nacimiento-hijo').val(),
                            numempleado: numempleado 
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response)
                            if (response.status === 'success') {

                                showHijosModal(numempleado);


                                // // Actualizar la tabla de hijos
                                // const nuevoHijo = `
                                //     <tr>
                                //         <td>${response.data.NombreHijo}</td>
                                //         <td>${response.data.FechaNacimiento}</td>
                                //     </tr>
                                // `;
                                // $('#hijos-tbody').append(nuevoHijo);

                                // Limpiar el formulario
                                $('#add-hijo-form')[0].reset();
                            } else {
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al agregar el hijo:', error);
                        }
                    });
            });

            $('#add-vestuario-form').submit(function(e) {
                    e.preventDefault(); 
                    const numempleado = $('#num_empleado_v').val();
                    $.ajax({
                        url: `${urlController}/AddVestuario.php`,
                        method: 'POST',
                        data: {
                            vestuario: $('#nombre-vestuario').val(),
                            orden: $('#orden-vestuario').val(),
                            numempleado: numempleado 
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response)
                            if (response.status === 'success') {
            
                                showVestuarioModal(numempleado);
                    
                                $('#add-vestuario-form')[0].reset();
                            } else {
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al agregar el vestuario:', error);
                        }
                    });
            });

            $('#add-zi-form').submit(function(e) {
                    e.preventDefault(); 
                    const numempleado = $('#num_empleado_vzi').val();
                    $.ajax({
                        url: `${urlController}/AddZI.php`,
                        method: 'POST',
                        data: {
                            Adscripcion: $('#Adscripcion-zi').val(),
                            Actividad: $('#Actividad-zi').val(),
                            Motivo: $('#Motivo-zi').val(),
                            numempleado: numempleado 
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response)
                            if (response.status === 'success') {
                                showZIModal(numempleado);
                                $('#add-zi-form')[0].reset();
                            } else {
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al agregar el ZI:', error);
                        }
                    });
            });

    });
</script>
