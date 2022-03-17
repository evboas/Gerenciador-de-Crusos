<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        //Pegando os dados no formulario
        //$descricao = $_POST['descricao']; 

        /* Pode ocorrer de o usuário fazer a inserção
        de algum dado malicioso, como <script> alert() </script>
        Para evitar este tipo de problema é preciso filtrar os 
        dados de entrada */
        $descricao = strip_tags($_POST['descricao']); //filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING) o ultimo parâmetro não é mais utilizado;

        //Criando o modelo do curso
        $curso = new Curso();
        $curso->setDescricao($descricao);

        //pode-se definir a descrição por um método mais direto
        //$curso->setDescricao($_POST['descricao']);

        //Inserindo no banco de dados
        $this->entityManager->persist($curso);
        $this->entityManager->flush();

        header('Location: /listar-cursos', 302);
    }
}