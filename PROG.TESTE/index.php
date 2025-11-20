<?php

require_once 'autoload.php';

$route = $_SERVER["REQUEST_URI"];

switch($route){
    case '/':
        $auth = new AuthController();
        if($auth->checkAuth()){
            echo"Você está autenticado!";
        }else{
            header('Location: /login');//direciona diretamente para tela de autentificação.
        }
        break;
    case '/login':
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "Fazer autentificação";
        }else{
            $controller = new ViewController();
            $controller->render('login');
        }
        break;
    case '/register':
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "Fazer cadastro";
        }else{
            $controller = new ViewController();
            $controller->render('register');
        }
        break;
    default:
        echo "ERROR - 404!";
        break;
}

