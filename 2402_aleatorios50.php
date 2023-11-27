<?php

$array = array();

for($i = 0; $i < 51; $i++){
  $num = rand(0, 99);
  array_push($array, $num);
}

echo print_r($array);

?>