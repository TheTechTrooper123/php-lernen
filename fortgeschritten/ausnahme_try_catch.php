<?php 
function division($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Fehler: Division durch Null");
    }
    return $dividend / $divisor;
}

// try...catch Block
try {
    echo division(3, 0);
} catch (Exception $e) {
    echo "Division konnte nicht ausgeführt werden";
}
?>