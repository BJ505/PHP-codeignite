<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indicadores</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <!-- Jquery ui -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <!-- Custom Styles -->
    <style>
        .validation {
            color: red;
        }
        .logoBJ{
            max-width: 200px;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
    <!-- styles CodeIgniter -->
    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: #1d1e20;
            padding: .4rem 0 0;
            color: white;
        }
        .menu {
            padding: 0.9rem 2rem;
        }
        header ul {
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            /* display: block; */
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
            color: white;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: #FF3D4F;
            color: white;
        }
        header .logo {
            float: left;
            height: 44px;
            padding: 0.2rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: #1d1e20;
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <!-- jquery UI -->
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <!-- jquery validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <!-- traduccion de validaciones -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/localization/messages_es.js"></script>
    <!-- traduccion de datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.1/i18n/jquery.ui.datepicker-es.min.js" crossorigin="anonymous"></script>
    <!-- Chart JS -->
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    
</head>
<!-- HEADER: MENU SECTION -->
<header>
    <div class="menu">
        <ul>
            <li class="logo">
                <a href="https://bjaramillo.cl" target="_blank">
                    <img class ="logoBJ" src="https://bjaramillo.cl/wp-content/uploads/2022/09/cropped-logo.png">
                </a>
            </li>
            <li class="menu-toggle">
                <button id="menuToggle">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="<?=base_url();?>">Home</a></li>
            <li class="menu-item hidden"><a href="<?=base_url();?>indicadores">Indicadores</a>
        </ul>
    </div>
</header>

<!-- CONTENT -->
<body>
    <div class="container">
        <div class="row">
            <div style="text-align: center;">
                <h1>Indicadores</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <button type="button" class="btn btn-success" data-bs-toggle="modal"data-bs-target="#addIndicadorModal">Agregar indicador</button>
            </div>
            <div class="col-1">
                <label style="text-align:right;">Fecha min:</label>
            </div>
            <div class="col-3">
                <input class="date_range_filter date" type="text" id="datepicker_from" />
            </div>
            <div class="col-1">
                <label style="text-align:right;">Fecha max:</label>
            </div>
            <div class="col-3">
                <input class="date_range_filter date" type="text" id="datepicker_to" />
            </div>
        </div>
        <!-- Tabla de inficadores UF -->
        <table class="table display" id="tblIndicadorUF">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Codigo</th>
                <th scope="col">Un. Medida</th>
                <th scope="col">Valor</th>
                <th scope="col">Fecha</th>
                <th scope="col">Tiempo</th>
                <th scope="col">Origen</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- iteramos todos los registros armando la estructura de cada row -->
                <?php foreach($indicadores as $uf): ?>
                    <tr id="tr<?=$uf['id'];?>">
                        <th scope="row"><?=$uf['id'];?></th>
                        <td><?=$uf['nombreIndicador'];?></td>
                        <td><?=$uf['codigoIndicador'];?></td>
                        <td><?=$uf['unidadMedidaIndicador'];?></td>
                        <td><?=$uf['valorIndicador'];?></td>
                        <td><?=$uf['fechaIndicador'];?></td>
                        <td><?=$uf['tiempoIndicador'];?></td>
                        <td><?=$uf['origenIndicador'];?></td>
                        <td>
                            <a data-id="<?=$uf['id'];?>" class="btn btn-primary btnUpdate">Editar</a>
                            <a data-id="<?=$uf['id'];?>" class="btn btn-danger btnDelete">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    </div>
    <!-- Modal Add-->
    <div class="modal fade" id="addIndicadorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo indicador UF</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addIndicador" name="addIndicador" action="<?php echo site_url('/create');?>" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="txtNombreIndicador" class="form-label">Nombre</label>
                                <input type="text" name="txtNombreIndicador" class="form-control" id="txtNombreIndicador">
                            </div>
                            <div class="form-group">
                                <label for="txtCodigoIndicador" class="form-label">Codigo</label>
                                <input type="text" name="txtCodigoIndicador" class="form-control" id="txtCodigoIndicador">
                            </div>
                            <div class="form-group">
                                <label for="txtnidadMedidaIndicador" class="form-label">Unidad de Medida</label>
                                <input type="text" name="txtnidadMedidaIndicador" class="form-control" id="txtnidadMedidaIndicador">
                            </div>
                            <div class="form-group">
                                <label for="numValorIndicador" class="form-label">Valor</label>
                                <input type="number" name="numValorIndicador" class="form-control" id="numValorIndicador" aria-describedby="valorHelper">
                                <div id="valorHelper" class="form-text">Separar decimales con punto "."</div>
                            </div>
                            <div class="form-group">
                                <label for="dateFechaIndicador" class="form-label">Fecha</label>
                                <input type="date" name="dateFechaIndicador" class="form-control" id="dateFechaIndicador">
                            </div>
                            <div class="form-group">
                                <label for="txtTiempoIndicador" class="form-label">Tiempo</label>
                                <input type="text" name="txtTiempoIndicador" class="form-control" id="txtTiempoIndicador">
                            </div>
                            <div class="form-group">
                                <label for="txtOrigenIndicador" class="form-label">Origen</label>
                                <input type="text" name="txtOrigenIndicador" class="form-control" id="txtOrigenIndicador">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar registro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End modal Add -->
     <!-- Modal Update-->
    <div class="modal fade" id="updateIndicadorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo indicador UF</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateIndicador" name="updateIndicador" action="<?php echo site_url('/update');?>" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="hidden" name="hiddenIdIndicador" id="hiddenIdIndicador"/>
                            <div class="form-group">
                                <label for="txtNombreIndicador" class="form-label">Nombre</label>
                                <input type="text" name="txtNombreIndicador" class="form-control" id="txtNombreIndicador">
                            </div>
                            <div class="form-group">
                                <label for="txtCodigoIndicador" class="form-label">Codigo</label>
                                <input type="text" name="txtCodigoIndicador" class="form-control" id="txtCodigoIndicador">
                            </div>
                            <div class="form-group">
                                <label for="txtnidadMedidaIndicador" class="form-label">Unidad de Medida</label>
                                <input type="text" name="txtnidadMedidaIndicador" class="form-control" id="txtnidadMedidaIndicador">
                            </div>
                            <div class="form-group">
                                <label for="numValorIndicador" class="form-label">Valor</label>
                                <input type="number" name="numValorIndicador" class="form-control" id="numValorIndicador" aria-describedby="valorHelper">
                                <div id="valorHelper" class="form-text">Separar decimales con punto "."</div>
                            </div>
                            <div class="form-group">
                                <label for="dateFechaIndicador" class="form-label">Fecha</label>
                                <input type="date" name="dateFechaIndicador" class="form-control" id="dateFechaIndicador">
                            </div>
                            <div class="form-group">
                                <label for="txtTiempoIndicador" class="form-label">Tiempo</label>
                                <input type="text" name="txtTiempoIndicador" class="form-control" id="txtTiempoIndicador">
                            </div>
                            <div class="form-group">
                                <label for="txtOrigenIndicador" class="form-label">Origen</label>
                                <input type="text" name="txtOrigenIndicador" class="form-control" id="txtOrigenIndicador">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End modal Update -->
</body>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
    <div class="copyrights">
        <p>&copy; <?= date('Y') ?> <a href="https://bjaramillo.cl" target="_blank" style="color:white;">bjaramillo.cl</a></p>
    </div>
</footer>

<!-- Deje todo en esta página en esta oportunidad ya que el proyecto es pequeño.
Claro que, a medida que el proyecto escale, subdividiría muchas cosas, el código script Jquery en un archivo aparte, al igual que el 
head y footer de la página, cada uno en su propio archivo. -->
<script>
    $(document).ready(function(){

        //Inicializar tabla con DataTables
        let table = new DataTable('#tblIndicadorUF',{
            //Integramos traducción de DataTables
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/es-ES.json',
            }
        });
        
        // Inicializar fechas de rango
        minDateFilter = "";
        maxDateFilter = "";

        //Inicializamos datepicker FROM
        $("#datepicker_from").datepicker({
            dateFormat: 'yy-mm-dd', //Seteo fecha en formato
            changeYear: true, //Disponible cambiar el años
            changeMonth: true, //Disponible cambiar mes
            maxDate: '0', //Fecha max HOY
            "onSelect": function(date) {
            minDateFilter = new Date(date).getTime();
            //ejecutar función draw de datatables
            table.draw();
            }
        }).keyup(function() {
            minDateFilter = new Date(this.value).getTime();
            //ejecutar función draw de datatables
            table.draw();
        });

        $("#datepicker_to").datepicker({
            dateFormat: 'yy-mm-dd', //Seteo fecha en formato
            changeYear: true, //Disponible cambiar el años
            changeMonth: true, //Disponible cambiar mes
            maxDate: '0', //Fecha max HOY
            "onSelect": function(date) {
            maxDateFilter = new Date(date).getTime();
            //ejecutar función draw de datatables
            table.draw();
            }
        }).keyup(function() {
            maxDateFilter = new Date(this.value).getTime();
            //ejecutar función draw de datatables
            table.draw();
        });

        // Se agrega lógica de rango de fechas a los filtros de la tabla
        $.fn.dataTableExt.afnFiltering.push(
            function(oSettings, aData, iDataIndex) {
                if (typeof aData._date == 'undefined') {
                aData._date = new Date(aData[5]).getTime();
                }

                if (minDateFilter && !isNaN(minDateFilter)) {
                if (aData._date < minDateFilter) {
                    return false;
                }
                }
                
                if (maxDateFilter && !isNaN(maxDateFilter)) {
                if (aData._date > maxDateFilter) {
                    return false;
                }
                }

                return true;
            }
        );

        // actualizar chart por cada cambio de visualización en la tabla (incluye toda la data filtrada)
        table.on( 'draw', function () {
            let tableData = table.rows({ filter : 'applied' }).data();
            //UF
            let sumUF=0;
            let sumCantUF = 0;
            //Dolar
            let sumDolar=0;
            let sumCantDolar = 0;
            //Euro
            let sumEuro=0;
            let sumCantEuro = 0;
            //UTM
            let sumUTM=0;
            let sumCantUTM = 0;
            //Se suma el total de los datos y se agrega un contador para dividir y sacar promedio
            tableData.each(function( index ){
                if(index[2]=='UF' && index[3]=='Pesos'){
                    sumUF+= parseInt(index[4]);
                    sumCantUF++;
                }else if(index[2]=='DOLAR' && index[3]=='Pesos'){
                    sumDolar+= parseInt(index[4]);
                    sumCantDolar++;
                }else if(index[2]=='EURO' && index[3]=='Pesos'){
                    sumEuro+= parseInt(index[4]);
                    sumCantEuro++;
                }else if(index[2]=='UTM' && index[3]=='Pesos'){
                    sumUTM+= parseInt(index[4]);
                    sumCantUTM++;
                }
            });
            // Calculo de promedios
            let totalUF = truncateDecimals((sumUF/sumCantUF), 2);
            let totalDolar = truncateDecimals((sumDolar/sumCantDolar), 2);
            let totalEuro = truncateDecimals((sumEuro/sumCantEuro), 2);
            let totalUTM = truncateDecimals((sumUTM/sumCantUTM), 2);
            // console.log(totalUF, totalDolar, totalEuro, totalUTM);

            //Inicialización del Chart según data after draw
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                title:{
                    text: "Promedio valor de principales Códigos"
                },
                subtitles: [{
                    text: "En donde Un. medida sea igual a Pesos"
                }],
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label}",
                    yValueFormatString: "$#,##0",
                    dataPoints: [
                        { y: totalUF, label: "Prom. UF" },
                        { y: totalDolar, label: "Prom. Dolar" },
                        { y: totalEuro, label: "Prom. Euro" },
                        { y: totalUTM, label: "Prom. UTM" }
                    ]
                }]
            });            
            //Render chart
            chart.render();
        });

        //Formulario addIndicador
        $("#addIndicador").validate({
            //Validaciones
            errorPlacement: function(label, element) {
                label.addClass('validation');
                label.insertAfter(element);
            },
            wrapper: 'span',
            rules: {
                txtNombreIndicador: "required",
                txtCodigoIndicador: "required",
                txtnidadMedidaIndicador: "required",
                numValorIndicador: "required",
                dateFechaIndicador: "required",
                // txtTiempoIndicador: "required", //unico campo null en el historico de data
                txtOrigenIndicador: "required"
            },
            messages:{

            },
            submitHandler: function(form){
                //obtener action directo del form
                var form_action = $("#addIndicador").attr("action");
                $.ajax({
                    data: $('#addIndicador').serialize(),
                    url: form_action,
                    type: "POST",
                    dataType: 'json',
                    success: function (res) {
                        let data = res.data;
                        // console.log(data);
                        //Armamos el registro recien creado para agregar a la tabla
                        var indicador = '<tr>';
                        indicador += '<th scope="row">'+ data.id + '</td>';
                        indicador += '<td>' + data.nombreIndicador + '</td>';
                        indicador += '<td>' + data.codigoIndicador + '</td>';
                        indicador += '<td>' + data.unidadMedidaIndicador + '</td>';
                        indicador += '<td>' + data.valorIndicador + '</td>';
                        indicador += '<td>' + data.fechaIndicador + '</td>';
                        indicador += '<td>' + data.tiempoIndicador + '</td>';
                        indicador += '<td>' + data.origenIndicador + '</td>';
                        indicador += '<td><a data-id="'+ data.id +'" class="btn btn-primary">Editar</a><a data-id="'+ data.id +'" class="btn btn-danger">Eliminar</a></td>';
                        indicador += '</tr>';            
                        // Lo agregamos a la tabla
                        $('#tblIndicadorUF tbody').prepend(indicador);
                        // reseteamos el formulario
                        $('#addIndicador')[0].reset();
                        // forzamos el cierre del modal
                        $('#addIndicadorModal').modal('hide');
                    },
                        error: function (data) {
                    }
                });
            }
        });

        //Botón de editar registro
        $(".btnUpdate").on('click', function(){
            //Obtenemos el id del registro
            let idIndicador = $(this).attr('data-id');

            $.ajax({
                url: 'getData/'+idIndicador,
                type: 'GET',
                dataType: 'JSON',
                success: function (res){
                    let data = res.data
                    $('#updateIndicadorModal').modal('show');
                    $('#updateIndicador #hiddenIdIndicador').val(data.id);
                    $('#updateIndicador #txtNombreIndicador').val(data.nombreIndicador);
                    $('#updateIndicador #txtCodigoIndicador').val(data.codigoIndicador);
                    $('#updateIndicador #txtnidadMedidaIndicador').val(data.unidadMedidaIndicador);
                    $('#updateIndicador #numValorIndicador').val(data.valorIndicador);
                    $('#updateIndicador #dateFechaIndicador').val(data.fechaIndicador);
                    $('#updateIndicador #txtTiempoIndicador').val(data.tiempoIndicador);
                    $('#updateIndicador #txtOrigenIndicador').val(data.origenIndicador);

                    // console.log(res);
                }, error: function (data) {
                    console.log(data);
                }
            })
        });
        
        $("#updateIndicador").validate({
            // validaciones
            rules: {
                txtNombreIndicador: "required",
                txtCodigoIndicador: "required",
                txtnidadMedidaIndicador: "required",
                numValorIndicador: "required",
                dateFechaIndicador: "required",
                // txtTiempoIndicador: "required", //unico campo null en el historico de data
                txtOrigenIndicador: "required"
            },
                messages: {
            },
            submitHandler: function(form) {
                //obtenemos action directo del form
                var form_action = $("#updateIndicador").attr("action");
                $.ajax({
                    data: $('#updateIndicador').serialize(),
                    url: form_action,
                    type: "POST",
                    dataType: 'json',
                    success: function (res) {
                        let data = res.data;
                        // agregamos a un array la esctructura de la fila actualizada
                        newData = [
                            '<th scope="row">'+ data.id + '</td>',
                            '<td>' + data.nombreIndicador + '</td>',
                            '<td>' + data.codigoIndicador + '</td>',
                            '<td>' + data.unidadMedidaIndicador + '</td>',
                            '<td>' + data.valorIndicador + '</td>',
                            '<td>' + data.fechaIndicador + '</td>',
                            '<td>' + data.tiempoIndicador + '</td>',
                            '<td>' + data.origenIndicador + '</td>',
                            '<td><a data-id="'+ data.id +'" class="btn btn-primary">Editar</a><a data-id="'+ data.id +'" class="btn btn-danger">Eliminar</a></td>'
                        ]
                        // actualizar registro en la tabla con nueva info
                        table.row( "#tr"+data.id ).data( newData ).draw();
                        // reseteamos el formulario
                        $('#updateIndicador')[0].reset();
                        // forzamos el cierre del modal
                        $('#updateIndicadorModal').modal('hide');
                    },
                        error: function (data) {
                    }
                });
            }
        }); 

        //Botón de eliminar registro
        $(".btnDelete").on('click', function(){
            //Obtenemos el id
            let idIndicador = $(this).attr('data-id');
            //Eliminamos el registro y lo quitamos de la tabla
            $.get('delete/'+idIndicador, function (data) {
                table.row( "#tr"+idIndicador ).remove().draw();
            })
        });
    });
    //Función para truncar numeros según cantidad de decimales señalados
    truncateDecimals = function (number, digits) {
        var multiplier = Math.pow(10, digits),
            adjustedNum = number * multiplier,
            truncatedNum = Math[adjustedNum < 0 ? 'ceil' : 'floor'](adjustedNum);

        return truncatedNum / multiplier;
    };
</script>
</html>







