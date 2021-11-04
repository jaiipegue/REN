<div class=" container marketing">
    <div class="mb-5 col-lg-12">
        <img class="second-slide" src="<?= base_url() ?>assets/images/logo_color.png" width="100" height="55" alt="Second slide">
    </div>

    <div class="mb-5   col-lg-12">
        <div class="col-12">
            <p class='titlel'>Detalles del Reporte</p> 
            <hr>
        </div>         
           
    </div>      
    <div class="mb-5  col-lg-12">
        <table class="table">
            <tr>
                <td>Barrio:</td>
                <td><?php echo $reportes['barrio'] ?></td>
            </tr>
            <tr>
                <td>Descripcion:</td>
                <td><?php echo $reportes['descripcion'] ?>  </td>
            </tr>
            <tr>
                <td>Tipo Contaminación:</td>
                <td><?php echo $reportes['tipo_contaminacion'] ?>  </td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td><?= ($reportes["validado"] == 0  ?  'En espera' : ($reportes["validado"] == 1  ? 'Aprobado' : 'Rechazado' )) ?>  </td>
            </tr>
            
        </table>
          
    </div><!-- /.col-lg-4 -->     

    <div class=" col-lg-12 row">
        
        <?php foreach($imagenesList as $imagen){ ?>
            <div class="col-sm-6  col-md-4 col-lg-4">
            <img class="second-slide" src="<?= base_url() ?>images/uploads/<?php echo $imagen['nombre_imagen'] ?>" width="270" height="270" alt="Second slide">
            <hr>
            </div> 
        <?php } ?>
        
    </div>

    <div class="btn-group" role="group" aria-label="Basic example">      
        <a class='text-mor btn-classic'  href="<?= base_url("sitio/reporte") ?>/gestionarReporte/<?php echo $reportes['id'] ?>/1">Aprobar</a>
        <a class='text-light back-mor btn-classic'  href="<?= base_url("sitio/reporte") ?>/gestionarReporte/<?php echo $reportes['id'] ?>/2">Rechazar</a>
    </div><!-- /.col-lg-4 -->   


</div><!-- /.container -->