<?php

namespace Alura\Cursos\Helper;

trait RenderizadorHTMLTrait
{
    public function renderizaHTML(string $caminhoTemplate, array $dados): string
    {
        extract($dados);
        ob_start();
        require __DIR__ . '/../../View/' . $caminhoTemplate;
        $html = ob_get_clean();

        return $html;
    }
}