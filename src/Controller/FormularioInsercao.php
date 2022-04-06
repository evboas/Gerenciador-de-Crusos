<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorHTMLTrait;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use RenderizadorHTMLTrait;

    public function processaRequisicao(): void
    {
        echo $this->renderizaHTML('Cursos/formulario.php',[
            'titulo' => 'Novo Curso'
        ]);
    }
}