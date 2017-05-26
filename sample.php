<?php

$animals = array("いぬ", "ねこ", "ねずみ");
$number = 0;

foreach ($animals as $bango => $value) {
  echo $animals[$bango];
  $number = $number + 1 ;
}
echo "{$number}回繰り返しました。";


?>
