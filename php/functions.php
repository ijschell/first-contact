<?php
//Conecto con la DB
include 'connect.php';

// Datos a guardar en el ejemplo:
// mail, nombre, apellido, para agregar hay que modificar un poco la función
function insertRegister($database, $name, $mail, $sitio){
  $result = true;

  if($mail == '' || $name == ''){
    $result = false;
  }else {
    $date = date('d/m/y');
    //inserto datos
    $database->insert("registros", [
    	"mail" => $mail,
    	"name" => $name,
    	"date" => $date,
      "sitio" => $sitio
    ]);

    if($database->error()[1] != null){
      if($database->error()[1] == 1062){
        $result = 'repeat';
      }else {
        $result = false;
      }
    }
  }

  if($result === true){
    echo 'Se registro correctamente.';
    //Envío mail ya que se registro correctamente.
    include '../contact/contact.php';
    sendMail($mail, $name, $sitio);

  }elseif($result === false) {
    //Cuando hay algún problema al registrar
    echo 'Error al registrar los datos.';

  }elseif ($result === 'repeat') {
    //Cuando el campo mail ya fue previamente registrado.
    echo 'Ese correo ya fue registrado, intente con otro.';

  }

}

//Presento los registros
function selectRegisters($database){
  $datas = $database->select("registros", [
	"name",
	"mail",
  "date",
  "sitio"
  ]);
  //var_dump($datas);
  return $datas;
  //echo json_encode($datas);
}

//print tabla registros
function printTableRegisters($database){
  $registros = selectRegisters($database);
  ?>
  <table id="registers-table" class="table table-striped table-borderer" border="1">
    <thead>
      <tr>
        <td>
          Nombre
        </td>
        <td>
          Mail
        </td>
        <td>
          ¿Sitio?
        </td>
        <td>
          Fecha
        </td>
      </tr>
    </thead>
    <tbody class="table-admin">
      <!-- cargo aquí los registros -->
      <?php
      $registros = selectRegisters($database);
      foreach ($registros as $registro) {
        ?>
        <tr>
          <td>
            <?php echo $registro['name']?>
          </td>
          <td>
            <?php echo $registro['mail']?>
          </td>
          <td>
            <?php echo $registro['sitio']?>
          </td>
          <td>
            <?php echo $registro['date']?>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
  <?php
}
?>
