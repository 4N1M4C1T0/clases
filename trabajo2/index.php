<?php
require_once 'modelo/bd.php';

$controlador = 'profesor';

if(!isset($_REQUEST['c']))
{
    require_once "controlador/$controlador.controladorprof.php";
    $controlador = ucwords($controlador) . 'Controlador';
    $controlador = new $controlador;
    $controlador->Index();    
}
else
{
    $controlador = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    require_once "controlador/$controlador.controladorprof.php";
    $controlador = ucwords($controlador) . 'Controlador';
    $controlador = new $controlador;
    
    call_user_func( array( $controlador, $accion ) );
}