<?php

class MiClase {
    public static $miEstatica = "Valor del Padre";
}

class MiOtraClase extends MiClase {
    public static $miEstatica = "Valor de la Hija";

    public function probar() {
        echo "Con self: " . self::$miEstatica . "\n";   // Imprime: Valor de la Hija
        echo "Con parent: " . parent::$miEstatica . "\n"; // Imprime: Valor del Padre
    }
}

$miClase = new MiOtraClase();
$miClase->probar();

?>