<?php
function division($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division durch Null");
  }
  return $dividend / $divisor;
}

try {
  echo division(5, 0);
} finally {
  echo 'Prozess abgeschlossen.';
}
?>