<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorHTMLTrait;

class FormularioLogin implements InterfaceControladorRequisicao
{
    use RenderizadorHTMLTrait;

    public function processaRequisicao(): void
    {
        echo $this->renderizaHTML('login/formulario.php',[
            'titulo' => 'Login'
        ]);
    }
}
