<?php

$variable1 = isset($_POST["variable1"]) ? $_POST["variable1"] : "";
$error = "";
$esPar = false;
$isNumeric = is_numeric($variable1);

if(!$isNumeric) {
  $error = $error . "No es un valor numerico";
}
else {
  $esPar = (intval($variable1) % 2) == 0;
}

?>
<html>
<body>

<h1><?php echo $variable1; ?></h1>
<h3><?php echo $error; ?></h3>
<?php if($esPar and $isNumeric) : ?>
  <h4>Es par</h4>
<?php elseif($isNumeric): ?>
  <h4>Es impar</h4>
<?php endif; ?>

<form method="POST">
  <input type="text" name="variable1">
  <input type="submit" value="enviar">
</form>
</body>
</html>
