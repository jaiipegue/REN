
<div class=" container marketing">
    <div class="mb-5 col-lg-12">
        <img class="second-slide" src="<?= base_url() ?>assets/images/logo_color.png" width="100" height="55" alt="Second slide">
    </div>
    <div class="mb-5   col-lg-12">
        <div class="col-12">
            <p class='title'>Reportar Sitio</p> 
            <hr>
        </div>         
           
    </div>      
    <div class="mb-5  col-lg-12">
        <p>Ingresa la información para realizar el reporte.</p>  
        <p>Esta será verificada y te notificaremos su estado lo más pronto posible. </p>      
    </div><!-- /.col-lg-4 -->       
</div><!-- /.container -->

<?php
        helper('form');
        echo form_open_multipart("sitio/save"); ?>
        <div class="form-group">           
            <select  name="tipo_contaminacion" class="form-control np" id="tipo_contaminacion">
                <option>Tipo de contaminación</option>
                <option value='Suelo'>De suelo</option>
                <option value='Hidrica'>Hidrica</option>
            </select>
         
        </div>
        <div class="form-group">          
            <input placeholder='Barrio' type="text" name="barrio" class="form-control" id="barrio" multiple />
        </div>
        <div class="form-group">            
            <textarea  placeholder='Breve descripción del estado del sitio'  name="descripcion" class="form-control" id="descripcion" rows="5" cols="30"></textarea>
        </div>        
        <div class="form-group">
            <label class="back-mor file" for="imagenes">Subir Imagen
                <input type="file" name="imagenes[]" class="form-control" id="imagenes" multiple />
            </label>
        </div>

        <div class="form-group">
            <label class="" for="imagenes">Ingrese la ubicación </label>
            <div class=''style="height: 400px;">
                <div id="mapi" style="width : 100%; height:400px"></div>
            </div>
        </div>

        <div class="form-group">
            <label class=" " for="">
                <input id="radio" type="radio" class="form-control"  multiple />
                Al marcar esta opción, usted acepta que los datos llenados 
                previamente sean usados por el sistema REN para la verificación
                 del reporte.
            </label>
        </div>


        <input type="hidden" name="longitud" id="longitud" multiple />
        <input type="hidden" name="latitud"  id="latitud" multiple />



        <div class="form-group">
            <input name="submit" disabled id="reportar" value="Reportar" type="submit" class="back-mor text-light btn-classic btn-block" />
            <?php if(isset($errors)){
		           echo $errors;?>
            <?php }
            elseif (isset($mensajeExito)){
                echo $mensajeExito;
            }?>
        </div>
    </form>