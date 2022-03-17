<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements InterfaceControladorRequisicao
{

    /* public function __construct()
    {
        
    } */

    public function processaRequisicao(): void
    {
        $titulo = "Novo Curso";
        require __DIR__. "/../../View/Cursos/formulario.php";
    }
}