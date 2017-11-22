<?php

$arr = [];

$arr["contador"] = 10;
$arr["valor1"] = 12;
$arr["valor2"] = 15;

$keys = array_keys($arr);

for($i = 0; $i < count($keys); $i++) {
  echo $keys[$i] . "<br />";
}


