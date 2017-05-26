<?php

$num = 0;

if ($num == 0) {
  echo "It's zero!\n";
} else {
  echo "It's not zero...";
}

if ($num < 20) {
  echo "less than 20!\n";
} else if ($num < 40) {
  echo "at least 20 and less than 40!\n";
} else {
  echo "at least 40!\n";
}

if ($num >= 10) {
  echo "more than 10, then 1 subtracted from num...\n";
  $num--;
  echo $num . "\n";
}

?>