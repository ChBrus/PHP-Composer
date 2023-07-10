<?php

    /*
        composer dump: Para iniciar el proyecto en Composer
    */

    /*
        namespace Text: Es como una variable de la cual obtenemos todo lo que incluye
                        este archivo, incluyendo la clase y el método estático
    */
    namespace Text;

    /*
        Clase Format
    */
    class Format {
        public static function upperText($value = "") {
            return strtoupper($value);
        }

        public static function lowerText($value = "") {
            return strtolower($value);
        }
    }

?>