
<?php

spl_autoload_register("autoload");
/*
function autoload($nombreClase) {
    $nombreClase = ucfirst(strtolower($nombreClase));
    $directorio = "clases/{$nombreClase}.php";
    if(file_exists($directorio)) {
        require_once($directorio);
        echo($directorio);
    } else {
        die("El archivo {$nombreClase}.php no se ha podido encontrar.");
    }
}
*/
function autoload($nombreClase) {
    echo($nombreClase);
    $nombreClase = strtolower($nombreClase);
    $directorio = $nombreClase.".php";
    //echo($directorio);
    if(file_exists($directorio)) {
        require_once($directorio);
        //echo($directorio);
    } else {
        die("El archivo {$nombreClase}.php no se ha podido encontrar.");
    }
}
