<?php include 'header.php'; ?>
  <body class="index">
    <div class="result"></div>
    <section class="wrapper">
      <div class="container-fluid">

        <h1>The Coding Bear</h1>

        <!-- imprimo title aquí -->
        <div class="title">
          <h2 class="roboto">Generar primer contacto con un cliente</h2>
        </div>

        <!-- comienza el box -->
        <div class="box-cont-form row">
          <div class="form-car">
            <div class="formulario">
              <form id="form" action="index.html" method="post">
                <input placeholder="Empresa" type="text" class="formu" name="name" value="" data-validation="required" data-validation-error-msg="Nombre es requerido">
                <input placeholder="Email" type="text" class="formu" name="mail" value="" data-validation="required" data-validation="email" data-validation-error-msg="El correo es requerido">
                <input type="submit" name="insert" value="Envíar" class="submit">
                <div style="clear: both"></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>
    <?php include 'footer.php'; ?>
  </body>
</html>
