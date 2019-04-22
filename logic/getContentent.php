<?php

//$content='esto es el conntent';

const Secciones=[
    'index'     =>'secciones/welcome.php',
    'productos' =>'secciones/productos.php',
    'contacto'  =>'secciones/contacto.php',
    404         =>'secciones/404.php',
];

$seccion='index';

if(isset($_GET['s'])){
    $seccion=$_GET['s'];
};

if(!array_key_exists($seccion,Secciones)){
    $seccion=404;
}

require_once(Secciones[$seccion]);
