<?php

    if(!function_exists('upper')) {
        /*
            Función que hace más sencilla la llamada al método upperText()
            de la clase Format a partir del namespace Text (Muy complicado XD)
        */
        function upper($value) {
            return Text\Format::upperText($value);
        }
    }

    /*
        Si la función lower no existe, entonces la va a crear
    */
    if(!function_exists('lower')) {
        function lower($value) {
            return Text\Format::lowerText($value);
        }
    }

?>