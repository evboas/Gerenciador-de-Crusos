<?php

use Alura\Cursos\Controller\{
    Deslogar,
    Exclusao,
    FormularioLogin,
    FormularioEdicao,
    FormularioInsercao,
    ListarCursos,
    Persistencia,
    RealizarLogin
};

$rotas = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Deslogar::class,
];

return $rotas;