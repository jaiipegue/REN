<br>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-3">
                <h4>Listado de PQRS</h4>   
            </div>
            <div class="col-md-9">
                <div class="btn-group bg-primary float-right" role="group" aria-label="Basic example">
                    <a  type="button" href='<?= base_url() ?>pqrs/add' class="btn ">Nuevo PQRS</a>
                </div>  
            </div>
            
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Radicado</th>
                    <th>Fecha Solicitud</th>
                    <th>Fecha Evento</th>
                    <th>Tipo Solicitud</th>
                    <th>Asunto</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($solicitudes as $solicitu){ ?>
                    <tr>
                        <td><?= $solicitu["radicado"] ?></td>
                        <td><?= $solicitu["fecha_solicitud"] ?></td>
                        <td><?= $solicitu["fecha_evento"] ?></td>
                        <td><?= $solicitu["tipo_solicitud"] ?></td>
                        <td><?= $solicitu["asunto"] ?></td>  <td>
                        <?= $solicitu["estado"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

