<?php include 'header.php'; ?>
  <body class="index">

    <!-- background -->
    <div class="bg"></div>

    <section class="wrapper">
      <div class="container-fluid">

        <!-- imprimo title aquí -->
        <div class="title">
          <h2 class="roboto">...</h2>
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
                <input placeholder="Email" type="text" class="formu" name="mail" value="" data-validation="required" data-validation="email" data-validation-error-msg="El correo es requerido">
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
