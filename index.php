<?php
#index: se muestran las vistas y envian acciones del usuario

#require(): establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa.
#Por ello, si el archivo especificado en la funcion require() no se encuentra, saltará un error 'PHP Fatal error' y el programa
#php se detendrá

#La versión require_once() funciona de la misma forma que su respectivo, salvo que, al utilizar la version _once, 
#se impide la carga de un mismo archivo más de una vez
#Si requerimos el mismo código más de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases

require_once 'controladores/plantilla.controlador.php';
require_once 'controladores/formularios.controlador.php';

require_once 'modelos/formularios.modelo.php';

$plantilla = new controladorPlantilla();
$plantilla->ctrTraerPlantilla();
