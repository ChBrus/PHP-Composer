<?php

    /*
        __DIR__: Hace referencia a la carpeta en la que se encuentra
                 el archivo
        require: Carga el sistema de carga de clases de Composer
    */
    require __DIR__ . '/vendor/autoload.php';

    /*
        Text: El namespace, del cual recibimos las clases o funciones que contenga este
              namespace.
        Format: El nombre de la clase a hacer referencia
        ::uperText('hola'): Se invoca al método upperText de la clase Format, dandóle
                            como parámetro el string "hola" en minúsculas
    */
    // echo Text\Format::upperText('hola');

    /*
        Facilita la función de arriba
    */
    echo upper('buenas') . "<br>";
    echo lower('BUENAS');
?>