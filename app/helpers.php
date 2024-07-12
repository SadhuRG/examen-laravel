<?php

function setActivo($ruta){
    return request()->routeIs($ruta) || request()->is("$ruta/*") ? 'activo' : '';

}

?>