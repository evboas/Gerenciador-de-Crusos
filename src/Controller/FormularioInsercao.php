<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao extends ControllerHTML implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        echo $this->renderizaHTML('Cursos/formulario.php',[
            'titulo' => 'Novo Curso'
        ]);
    }
}