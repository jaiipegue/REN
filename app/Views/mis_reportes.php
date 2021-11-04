<div class=" container marketing">
    <div class="mb-5 col-lg-12">
        <img class="second-slide" src="<?= base_url() ?>assets/images/logo_color.png" width="100" height="55" alt="Second slide">
    </div>

    <div class="mb-5   col-lg-12">
        <div class="col-12">
            <p class='titlel'>Estado de Reporte</p> 
            <hr>
        </div>        
    </div>      

    <div class="mb-5  col-lg-12">
        <p>Gracias por realizar su reporte. Tenga en cuenta que una vez terminado el reporte, este estará en espera un por tiempo. </p>      
    </div><!-- /.col-lg-4 -->     

    <div class="mb-5   col-lg-12">
        <div class="col-12">
            <p class='titlel'>Reportes realizados</p> 
            <hr>
        </div>        
    </div> 

    <div class="mb-5   col-lg-12">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>Barrio</th>
                    <th>Estado</th>
                    
                </tr>
                <tr>
                <?php foreach($reportes as $solicitu){ ?>
                    <tr>
                        <td><?= $solicitu["barrio"] ?></td>
                        <td><?= ($solicitu["validado"] == 0  ?  'En espera' : ($solicitu["validado"] == 1  ? 'Aprobado' : 'Rechazado' )) ?></td>                        
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