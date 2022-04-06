<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit();
}

session_start();

$RotaLogin = stripos($caminho, 'login');
//A partir do PHP 8 --> $RotaLogin = str_contains($caminho, 'login');
//Se houver a necessidade de fazer a comparação de uma palavra com acento
//usar o comando mb_stripos 

if(!isset($_SESSION['logado']) && $RotaLogin === false){
    //Só é possível utilizar !$RotaLogin para a opção de PHP 8
    //A opção utilizada retorna a posição da palavra login na
    //string $caminho
    header('Location: /login');
    exit();
}

$classeControladora = $rotas[$caminho];
/**@var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();
