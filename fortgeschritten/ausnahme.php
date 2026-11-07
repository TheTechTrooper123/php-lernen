<?php 
function division($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Fehler: Division durch Null");
    } else {
        $ergebnis = $dividend / $divisor;
        return $ergebnis;
    }
}

echo division(2, 0);
?>