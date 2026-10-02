<?php
// Contexto de la función estática.
// Lo que hace esta funcionalidad es almacenar

Class A {
    public static function miFuncion(){
        // Mostrará el nombre de la clase actual::
        echo __CLASS__;
    }

    public static function otraFuncion(){
         self::miFuncion();
    }
} // fin de A

Class B extends A {
    public static function miFuncion(){
        // Mostrará el nombre de clase actual::
        echo __CLASS__;
    }
}

B::otraFuncion();
?>