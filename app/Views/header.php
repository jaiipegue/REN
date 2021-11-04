<header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top ">        
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('quienes') ?>">¿Quiénes somos? <span class="sr-only">(current)</span></a>
            </li>
            <?php if (isset($_SESSION['user']['tipo_usuario']) && $_SESSION['user']['tipo_usuario'] == 'Ciudadano') {?>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('panel') ?>">Reportar Sitio <span class="sr-only">(current)</span></a>
            </li> 
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('sitio/misReportes') ?>">Estado de reporte <span class="sr-only">(current)</span></a>
            </li>
            <?php } else if (isset($_SESSION['user']['tipo_usuario']) && $_SESSION['user']['tipo_usuario'] == 'Admin') { ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('sitio/noValidados') ?>">Ver informe <span class="sr-only">(current)</span></a>
            </li>
            <?php }else if(!isset($_SESSION['user']['tipo_usuario'])){?>
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('registro') ?>">Registrarse <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('login') ?>">Iniciar Sesión <span class="sr-only">(current)</span></a>
              </li>
           
              <?php  } ?>
            
            
          </ul>
        </div>
      </nav>
    </header>