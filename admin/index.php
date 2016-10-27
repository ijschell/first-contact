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
      if($_POST['user'] == 'Admin' && $_POST['pass'] == '1234'){
        $_SESSION['loged'] = true;
      }else {
        $mensaje = '<div class="alert alert-danger position-alert-admin">Error, los datos ingresados no son correctos.</div>';
      }
    }

    //logout
    if(isset($_GET['logout'])){
      unset($_SESSION['loged']);
    }
    ?>
      <div class="logoutbar">
        <h1 class="logo-popular pull-left"></h1>
      </div>
    <?php
    if(!isset($_SESSION['loged'])){
      echo $mensaje;
      $class_no_login = 'footer-login';
      ?>
      <div class="box-login">
        <div class="login">
          <form id="loginForm" class="" action="./" method="post">
            <div class="row">
              <div class="col-lg-12">
                <p style="text-align: center; font-size: 20px">Please <span class="color-red">Log in</span>.</p>
                <hr>
              </div>
            </div>
            <div class="row sep-form-admin">
              <div class="col-lg-2">
                <i class="material-icons">&#xE7FD;</i>
              </div>
              <div class="col-lg-10">
                <input type="text" name="user" value="" placeholder="Usuario" class="form-control">
              </div>
            </div>
            <div class="row sep-form-admin">
              <div class="col-lg-2">
                <i class="material-icons">&#xE897;</i>
              </div>
              <div class="col-lg-10">
                <input type="password" name="pass" value="" placeholder="Contraseña" class="form-control">
              </div>
            </div>
            <div class="row sep-form-admin">
              <div class="col-lg-12">
                <a href="#" onclick="submitForm();" class="btn btn-popular btn-lg pull-right">Login!</a>
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
        <h1 class="logo-popular pull-left"></h1>
        <a href="?logout" class="btn-popular-negative btn pull-right btn-xs">Logout</a>
      </div>
      <div class="title-admin">
        <h2>POPULAR AUTO admin console</h2>
      </div>
      <!-- tabla de registros -->



      <div class="cont-registers-admin">
        <?php
        printTableRegisters($database);
        ?>

      </div>
      <a href="../php/export.php" class="btn btn-popular">Exportar a Excel!</a>
      <?php
    }
    ?>
    <section id="footerAdmin" class="<?php echo $class_no_login?>">
      <p class="pull-left">
        <?php echo '&copy; '. date("Y"). ' Banco Popular' ?>
      </p>

      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve" class="popular-ico pull-right">
        <rect x="3.2" y="4.1" fill="#FFFFFF" width="32.9" height="31.9"/>
        <path fill="#CF202F" d="M0.7,0.7v38.6h38.6V0.7H0.7z M9.2,27.9v-7.5C12.7,22.3,12.4,26.4,9.2,27.9z M9.2,19.1v-7.1  C12.3,13.2,12.8,17.3,9.2,19.1z M11.1,19.7L11.1,19.7c0,0,1.7-1.1,2.2-3.2v6.4C12.9,20.9,11.5,19.9,11.1,19.7z M15.2,8  c4.4,2.8,4.7,11.4,0,14.7V8z M20,17.9v17c-1.7,0-3.3-0.3-4.8-0.8v-9.4C16.3,24.2,19.1,22.1,20,17.9z M21.9,7.1  c5,3.1,4.8,12.1,0,15.6V7.1z M26.6,18.6v14.8c-1.5,0.7-3.1,1.2-4.8,1.4V24.7C23,24.1,25.5,22.1,26.6,18.6z M22.4,5.3  c1.5,0.2,2.9,0.7,4.2,1.4v4C25.9,8.4,24.5,6.7,22.4,5.3z M28.5,9.4c3.5,2.5,4.1,8.8,0,12.1V9.4z M20,13c-0.6-2.9-2.1-5.2-4.6-7.2  C16.8,5.3,18.4,5,20,5V13z M13.3,6.6v7.9c-0.5-2.6-2.9-4-4.5-4.5C10.1,8.6,11.6,7.5,13.3,6.6z M7.3,12.1v15.9C5.9,25.6,5,22.9,5,20  C5,17.1,5.9,14.4,7.3,12.1z M8.9,30c0,0,0.1,0,0.1,0l0,0c0,0,0,0,0,0c0.1,0,0.2-0.1,0.2-0.1v0c1.9-0.7,3.7-2.5,4.1-5v8.5  C11.6,32.5,10.1,31.4,8.9,30z M28.5,32.3v-9.1l3.1,6.3C30.7,30.5,29.7,31.5,28.5,32.3z M32.8,27.6l-2.6-5.3l0,0  c1.3-1.3,2.9-3.2,2.9-6.5c0-1.7-0.3-3.1-0.8-4.3c1.7,2.4,2.7,5.4,2.7,8.5C34.9,22.8,34.1,25.4,32.8,27.6z"/>
      </svg>

    </section>
    </div>

  </div>
    <?php include '../footer.php' ?>
  </body>
</html>
