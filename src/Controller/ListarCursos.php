<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos extends ControllerHTML implements InterfaceControladorRequisicao
{
    private $repositorioCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioCursos =  $entityManager->getRepository(Curso::class);
    }

    public function processaRequisicao(): void
    {
        $cursos = $this->repositorioCursos->findAll();

        echo $this->renderizaHTML('Cursos/listar-cursos.php',[
            'cursos' => $cursos,
            'titulo' => "Lista de Cursos"
        ]);
    }
}