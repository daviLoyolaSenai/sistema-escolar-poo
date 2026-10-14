<?php
//inclui o arquivo da classe Aluno
require_once 'Aluno.php';

echo "<h2>Testando o Sistema Escolar - POO</h2>";

//cris um objeto Aluno usando o construtor
$aluno1 = new Aluno("Nathan", 17, "Desenvolvimento Web");

//chama o método matricular()
$aluno1->matricular();
echo "<br>";

// verificando maioridade
echo $aluno1->verificarMaioridade();
echo "<br>";

//cadastra as notas com cadastrarNotas()
$aluno1->cadastrarNotas(8.5, 7.0);
echo "<br>";

//exibe as informações com exibirInformacoes()
$aluno1->exibirInformacoes();
echo "<br>";

//mostra a média e verifica se o aluno foi aprovado
echo "<b>Status de Aprovação:</b><br>";
$aluno1->verificarAprovacao();
echo "<br>";

//cancela a matrícula e testa dnv o comportamento
echo "<b>Cancelando a matrícula:</b><br>";
$aluno1->cancelarMatricula();

//testando cancelar de novo pra ver a mensagem de matrícula inativa
$aluno1->cancelarMatricula();

echo "<br>";
//exibindo informações finais após cancelamento
$aluno1->exibirInformacoes();

?>