<?php

class Aluno {
    //declarando atributos privados
    private $nome;
    private $idade;
    private $curso;
    private $matriculado;
    private $nota1;
    private $nota2;

    //construtor: chamado quando um novo Aluno é criado
    public function __construct($nome, $idade, $curso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;
        
        $this->matriculado = false;
        $this->nota1 = 0.0;
        $this->nota2 = 0.0;
    }

    //metodos Getters e Setters para acessar e modificar os atributos privados
    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getIdade() { return $this->idade; }
    public function setIdade($idade) { $this->idade = $idade; }

    public function getCurso() { return $this->curso; }
    public function setCurso($curso) { $this->curso = $curso; }

    public function getMatriculado() { return $this->matriculado; }
    public function setMatriculado($matriculado) { $this->matriculado = $matriculado; }

    public function getNota1() { return $this->nota1; }
    public function setNota1($nota1) { $this->nota1 = $nota1; }

    public function getNota2() { return $this->nota2; }
    public function setNota2($nota2) { $this->nota2 = $nota2; }

    //metodos comportamentais

    public function matricular() {
        // so permite a mátricula se o aluno ainda não estiver matriculado
        if ($this->matriculado == false) {
            $this->matriculado = true;
            echo "Aluno matriculado com sucesso!<br>";
        } else {
            echo "O aluno já está matriculado!<br>";
        }
    }

    public function cancelarMatricula() {
        if ($this->matriculado == true) {
            $this->matriculado = false;
            echo "Matrícula cancelada.<br>";
        } else {
            echo "Aluno já está com matrícula inativa.<br>";
        }
    }

    public function verificarMaioridade() {
        // retorna mensagem informando se é maior ou menor dee idade
        if ($this->idade >= 18) {
            return "Aluno é maior de idade e pode participar de cursos noturnos.<br>";
        } else {
            return "Aluno é menor de idade.<br>";
        }
    }

    public function cadastrarNotas($n1, $n2) {
        // atribui valor para as notas
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        echo "Notas cadastradas com sucesso!<br>";
    }

    public function calcularMedia() {
        //retorna a media
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarAprovacao() {
        $media = $this->calcularMedia();
        
        //usando média 6.0 para aprovação
        if ($media >= 6.0) {
            echo "Aprovado<br>";
        } else {
            echo "Reprovado<br>";
        }
        
    }

    public function exibirInformacoes() {
        //mostra todos os dados formatados
        $statusMatricula = $this->matriculado ? "Ativa" : "Inativa";
        
        echo "<b>--- Dados do Aluno ---</b><br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Curso: " . $this->curso . "<br>";
        echo "Matrícula: " . $statusMatricula . "<br>";
        echo "Nota 1: " . $this->nota1 . "<br>";
        echo "Nota 2: " . $this->nota2 . "<br>";
        
        $media = $this->calcularMedia();
        echo "Média: " . $media . "<br>";
        echo "----------------------<br>";
    }
}
?>