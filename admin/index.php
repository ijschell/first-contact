<?php include '../header.php'; ?>
  <body>
    <div class="container-fluid">
    <?php
    include '../php/actions.php';
    session_start();

    //compruebo si se logueo
    $mensaje = '';
    $class_no_login = '';
    if(isset($_POST['user']) && isset($_POST['pass'])){
      if($_POST['user'] == 'thecodingbear' && $_POST['pass'] == 'codingbear'){
        $_SESSION['loged'] = true;
      }else {
        $mensaje = '<div class="alert alert-danger position-alert-admin">Error, los datos ingresados no son correctos.</div>';
      }
    }

    //logout
    if(isset($_GET['logout'])){
      unset($_SESSION['loged']);
    }

    if(!isset($_SESSION['loged'])){
      echo $mensaje;
      $class_no_login = 'footer-login';
      ?>
      <div class="box-login">
        <div class="login">
          <form id="loginForm" class="" action="./" method="post">
            <div class="row sep-form-admin">
              <div class="col-lg-2">
                <span class="logintxt">User</span>
              </div>
              <div class="col-lg-10">
                <input type="text" name="user" value="" placeholder="Usuario" class="form-control">
              </div>
            </div>
            <div class="row sep-form-admin">
              <div class="col-lg-2">
                <span class="logintxt">Pass</span>
              </div>
              <div class="col-lg-10">
                <input type="password" name="pass" value="" placeholder="Contraseña" class="form-control">
              </div>
            </div>
            <div class="row sep-form-admin" style="margin: 0">
              <div class="col-lg-12">
                <a href="#" onclick="submitForm();" class="btn btn-primary btn-lg pull-right">Entrar</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php
    }else {
      ?>
      <!-- traigo aquí los registros desde la DB -->

      <!-- Logo y logout -->
      <div class="logoutbar">
        <a href="?logout" class="btn-default btn pull-right btn-lg">Logout</a>
      </div>
      <!-- tabla de registros -->

      <div class="cont-registers-admin">
        <?php
        printTableRegisters($database);
        ?>
      </div>
      <!--<a href="../php/export.php" class="btn btn-popular">Exportar a Excel!</a>-->
      <?php
    }
    ?>
    </div>

  </div>
    <?php include '../footer.php' ?>
  </body>
</html>
