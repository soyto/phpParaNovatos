<?php

$value = isset($_POST["number"]) ? $_POST["number"] : null;
$error = null;
$output = "";

//Comprobamos que nos han suministro un valor numerico
if(!is_numeric($value)) {
  $error = "Debe introducir un valor númerico";
}

if(intval($value) < 0) {
  $error = "Debe introducir un valor que sea superior a cero";
}

if(intval($value) > 50) {
  $error = "Debe introducir un valor inferior o igual a 50";
}

//Si no tenemos errores
if(is_null($error)) {

  $current = 0;
  while($current < intval($value)) {
    $output .= $current . "-";
    $current += 1;
  }

  $output.= intval($value);
}

?><html>
<body>

<?php if(!is_null($error)) : ?>
  <h3><?php echo $error; ?></h3>
<?php else: ?>
  <h2><?php echo $output; ?></h2>
<?php endif; ?>

<form method="post">
  <input type="text" name="number">
  <input type="submit" value="enviar">
</form>
</body>
</html>
