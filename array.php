<?php

$arr = [];

for($i = 0; $i < 10; $i++) {
  $arr[$i] = pow(2, $i);
}

for($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
}
