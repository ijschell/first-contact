<?php include 'header.php'; ?>
  <body class="index">

    <header>
      <div class="container-fluid">
        <h1 class="logo-popular pull-left">Banco Popular</h1>
        <div class="pull-right">
          <a href="http://www.popular.com/" class="volver-link pull-left"><i class="material-icons icon-rotate">&#xE5C5;</i> volver a popular</a>
          <a href="#" class="pull-left link-tel"><i class="material-icons">&#xE61D;</i> 787.294.2568</a>
          <div class="pull-left switch-lang">
            <a href="es" class="active">ES</a>
            <a href="en">EN</a>
          </div>
        </div>
      </div>
    </header>

    <!-- background -->
    <div class="bg"></div>

    <section class="wrapper">
      <div class="container-fluid">

        <!-- imprimo title aquí -->
        <div class="title">
          <h2 class="roboto">Aprovecha estas grandes ofertas que tenemos para ti.</h2>
        </div>

        <!-- comienza el box -->
        <div class="box-cont-form row">
          <div class="info-buy-car">
            <h3 class="roboto">Obtén el pago mensual que deseas con</h3>
            <p class="special-name">
              Popular<br /><span class="color-red">Auto<span class="reg">®</span></span>
            </p>
            <img src="./images/05.png" alt="" />
          </div>
          <div class="form-car">
            <h2 class="title-form traduct-title-form">Compártenos tu información</h2>
            <div class="formulario">
              <form id="form" action="index.html" method="post">
                <input placeholder="Nombre" type="text" class="formu" name="name" value="" data-validation="required" data-validation-error-msg="Nombre es requerido">
                <input placeholder="Apellido" type="text" class="formu" name="lastname" value="" data-validation="required" data-validation-error-msg="Apellido es requerido">
                <input placeholder="Email" type="text" class="formu" name="mail" value="" data-validation="required" data-validation="email" data-validation-error-msg="El correo es requerido">
                <input placeholder="Teléfono" type="text" class="formu" name="phone" value="" data-validation="required" data-validation="phone" data-validation-error-msg="El teléfono es requerido">
                <select class="formu" name="interes" data-validation="required" data-validation="interes" data-validation-error-msg="El interes es requerido">
                  <option value="No seleccionado" class="big-select">¿Qué oferta te interesa?</option>
                  <option value="Ford" class="big-select">Ford</option>
                  <option value="Jeep" class="big-select">Jeep</option>
                  <option value="Hyundai" class="big-select">Hyundai</option>
                  <option value="Nissan" class="big-select">Nissan</option>
                  <option value="RAM" class="big-select">RAM</option>
                  <option value="Toyota" class="big-select">Toyota</option>
                </select>
                <input type="submit" name="insert" value="Envíar" class="submit">
                <div class="result"></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>
    <?php include 'footer.php'; ?>
  </body>
</html>
