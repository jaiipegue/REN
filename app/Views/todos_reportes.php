<div class=" container marketing">
    <div class="mb-5 col-lg-12">
        <img class="second-slide" src="<?= base_url() ?>assets/images/logo_color.png" width="100" height="55" alt="Second slide">
    </div>

    <div class="mb-5   col-lg-12">
        <div class="col-12">
            <p class='titlel'>Informe</p> 
            <hr>
        </div>        
    </div>      

    <div class="mb-5  col-lg-12">
        <p>Estados pendientes por validar </p>      
    </div><!-- /.col-lg-4 -->     


    <div class="mb-5   col-lg-12">
        <div class="col-12">
            <table class="table table-responsive">
                <tr>
                    <th>Barrio</th>
                    <th>Tipo de Contaminación</th>
                    <th>Estado</th>
                    <th>Detalles</th>
                    
                </tr>
                <tr>
                <?php foreach($reportes as $solicitu){ ?>
                    <tr>
                        <td><?= $solicitu["barrio"] ?></td>
                        <td><?= $solicitu["tipo_contaminacion"] ?></td>
                        <td><?= ($solicitu["validado"] == 0  ?  'En espera' : ($solicitu["validado"] == 1  ? 'Aprobado' : 'Rechazado' )) ?></td> 
                        <td><a href="<?= base_url("sitio/reporte/$solicitu[id]") ?>">Ver Detalles</a></td>                       
                    </tr>
                <?php } ?>
                </tr>
            </table>
            
        </div>        
    </div> 
    
    <div class="mb-5  col-lg-12">     
        <?php echo $paginador->links() ?>
    </div>
    <div class="clearfix"></div>
    <div class="mb-5  col-lg-12">     
        <a class='back-mor text-light btn-classic btn-block'  href="<?= base_url("panel") ?>">Volver</a>
    </div><!-- /.col-lg-4 -->    
</div><!-- /.container -->