<?php
    header('Content-type: application/json');
    include_once('./modelos/Usuario.php');
    include_once('./utils/conexion.php');
    $u = new Usuario();
    switch($_SERVER["REQUEST_METHOD"]){
        case 'GET':
            //echo'Obtener Usuario ';
            $u = new Usuario();
            $u->obtUsuario();
            break;
        case 'POST':
           $variables = file_get_contents('php://input');
           $POST = $variable;
            //echo'Insertar Usuario';
            var_dum($_POST);
            $u = new Usuario();
            $u->inUsuario();
            break;
        case 'PUT':
            echo'Actualizar Usuario';
            $u->actUsuario();
            break;
        case 'PATCH':
            echo'Modifica un campo Usuario';
            $u->actCampoUsuario();
            break;
        case 'DELETE':
            echo'Eliminar Usuario';
            $u->delUsuario();
            break;
        default:
            $msg = array("msg"=>"Método no válido.");
            echo json_encode($msg);
    }