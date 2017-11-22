<?php

$numAlumnos = 5;
$notas = isset($_POST["notas"]) ? $_POST["notas"] : null;
$error = null;
$media = null;

if(!is_null($notas)) {

  $media = 0;

  for($i = 0; $i < count($notas) && is_null($error); $i++) {
    $nota = $notas[$i];

    //Comprobamos la validez de los datos
    if(!is_numeric($nota)) {
      $error = "Debes introducir solo valores numericos";
    }
    else if(intval($nota) < 0) {
      $error = "Debes poner una nota superior a cero";
    }
    else if(intval($nota) > 10) {
      $error = "Debes poner las notas inferiores a diez";
    }

    if(is_null($error)) {
      $media += intval($nota);
    }
  }

  if(is_null($error)) {
    $media /= count($notas);
  }
}

?>
<html>
<body>

<?php if(!is_null($error)): ?>
  <h3><?php echo $error; ?></h3>
<?php elseif(!is_null($media)): ?>
  <h3>La media es <?php echo $media; ?></h3>
<?php endif; ?>

<form method="POST">

  <?php for($i = 0; $i < $numAlumnos; $i++) : ?>
    <div>
      <label>Alumno <?php echo $i + 1; ?></label>
      <input type="text" name="notas[<?php echo $i; ?>]">
    </div>
  <?php endfor; ?>
  <input type="submit" value="Enviar">
</form>

</body>
</html>
