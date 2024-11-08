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

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <style>
        .validation {
            color: red;
        }
    </style>
  
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/localization/messages_es.js"></script>

    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1>Indicadores de UF</h1>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#addIndicadorModal">Agregar indicador</button>
            </div>
            
        </div>
        <?php //print_r($indicadores); ?>
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
            <?php foreach($indicadores as $uf): ?>
                <tr>
                    <th scope="row"><?=$uf['id'];?></th>
                    <td><?=$uf['nombreIndicador'];?></td>
                    <td><?=$uf['codigoIndicador'];?></td>
                    <td><?=$uf['unidadMedidaIndicador'];?></td>
                    <td><?=$uf['valorIndicador'];?></td>
                    <td><?=$uf['fechaIndicador'];?></td>
                    <td><?=$uf['tiempoIndicador'];?></td>
                    <td><?=$uf['origenIndicador'];?></td>
                    <td>
                        <a data-id="<?=$uf['id'];?>" class="btn btn-primary">Editar</a>
                        <a data-id="<?=$uf['id'];?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<!-- Deje todo en esta página en esta oportunidad ya que el proyecto es pequeño.
Claro que, a medida que el proyecto escale, subdividiría muchas cosas, el código script Jquery en un archivo aparte, al igual que el head y footer de la página, cada uno en su propio archivo. -->
<script>
    $(document).ready(function(){
        //Inicializar tabla con DataTables
        let table = new DataTable('#tblIndicadorUF',{
            //Integramos traducción de DataTables
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/es-ES.json',
            },
        });

        //Formulario addIndicador
        $("#addIndicador").validate({
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
                var form_action = $("#addIndicador").attr("action");
                console.log("nice");
                $.ajax({
                    data: $('#addIndicador').serialize(),
                    url: form_action,
                    type: "POST",
                    dataType: 'json',
                    success: function (res) {
                        let data = res.data;
                        console.log(data);
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
                        $('#tblIndicadorUF tbody').prepend(indicador);
                        $('#addIndicador')[0].reset();
                        $('#addIndicadorModal').modal('hide');
                    },
                        error: function (data) {
                    }
                });
            }
        });
    });
</script>
</html>







