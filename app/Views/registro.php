
<div class=" container marketing">
    <div class="mb-5 col-lg-12">
        <img class="second-slide" src="<?= base_url() ?>assets/images/logo_color.png" width="100" height="55" alt="Second slide">
    </div>

    <div class="col-lg-12">
        <div class="col-12">
            <p class='title'>Registrarse</p> 
            <hr>
        </div>  
    </div>
    <div class="mb-5  col-lg-12">
        <p>Se parte de una ciudad Pura..</p>  
    </div><!-- /.col-lg-4 -->   
</div>
<div class="register-page">     
    <div class="container form-register">
        <?php helper('form'); echo form_open("registrar"); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input placeholder="Nombres" autocomplete="off" name="nombres" class="form-control" type="text" id="nombres" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input placeholder="Apellidos" autocomplete="off" name="apellidos" class="form-control" type="text" id="apellidos" />
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input placeholder="edad" autocomplete="off" name="edad" class="form-control" type="number" id="edad" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input name="email" autocomplete="off" placeholder="Email" class="form-control" type="email" id="email" />
                </div>
            </div>
        </div>
        
        
        <div class="form-group">
            <input name="telefono"  autocomplete="off" placeholder="Teléfono" class="form-control" type="number" id="telefono" />
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">                    
                    <input placeholder="Contraseña" name="clave" autocomplete="off" class="form-control" type="password" id="clave" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">                   
                    <input placeholder="Contraseña" class="form-control" autocomplete="off" type="password" id="confirmClave" />
                </div>
            </div>
        </div>
        
        
        <div class="form-group">
            <input name="submit" class="back-mor text-light btn-classic btn-block" type="submit" value="Registar" />
            <?php if(isset($errors)){
        echo $errors;?>
            <?php }?>
        </div>
        <p > 
            <a class="text-mor" href="<?= base_url('login') ?>">¿Te has registrado antes?</a>
        </p>
    </div> 
    </form>
</div>
