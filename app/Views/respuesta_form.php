<?php
        helper('form');
        echo form_open("pqrs/response/save"); ?>
     
     <input name="id_solicitud" value="<?= $id_solicitud ?>" class="form-control" type="hidden" id="id_solicitud" />
        <div class="form-group">
            <label for="asunto">Asunto</label>
            <input name="asunto" class="form-control" type="text" id="asunto" />
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input name="descripcion" class="form-control" type="text" id="descripcion" />
        </div>
      
        <div class="form-group">
            <label for="firma">Firma</label>
            <input name="firma" class="form-control" type="tex" id="firma" />
        </div>
        <div class="form-group">
            <input name="submit" type="submit" class="btn btn-primary" />
            <?php if(isset($errors)){
		           echo $errors;?>
            <?php }
            elseif (isset($mensajeExito)){
                echo $mensajeExito;
            }?>
        </div>
        </form>