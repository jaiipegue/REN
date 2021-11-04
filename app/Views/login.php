
<div class=" container marketing">
    <div class="mb-5 col-lg-12">
        <img class="second-slide" src="<?= base_url() ?>assets/images/logo_color.png" width="100" height="55" alt="Second slide">
    </div>

    <div class="col-lg-12">
        <div class="col-12">
            <p class='title'>Ingresar</p> 
            <hr>
        </div>  
    </div>
    <div class="mb-5  col-lg-12">
        <p>Gracias por hacer parte del equipo que busca un nuevo aire en la ciudad.</p>  
    </div><!-- /.col-lg-4 -->   
</div>
<?php helper('form'); echo form_open("usuario/login"); ?>
<div class="container login-page">
    <div class="form">         
        <form class="login-form">
            <input type="text"  class="form-control" id="correo" placeholder="Correo Electronico" name="correo"/>
            <br>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña"/>
            <br>
            <input name="submit" class="back-mor text-light btn-classic btn-block" type="submit" value="Ingresar" />
            <?php if(isset($errors)){
		           echo $errors;?>
            <?php } ?>
            <br>
            <p class="message">
                <a href="<?= base_url('registro') ?>">¿No tienes cuenta aún?</a>
            </p>
        </form>
    </div>
</div>
      