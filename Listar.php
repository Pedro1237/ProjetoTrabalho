<?php
require "conexao.php";
require "RepositorioUniversidade.php";

// Cria uma instância do RepositorioUniversidade
$repositorio = new RepositorioUniversidade();

// Lista todas as universidades no banco de dados
$valores = $repositorio->listar($banco);

// Itera sobre os resultados e exibe as informações
foreach ($valores as $valor) {
    echo "Localização: " . $valor['localizacao'] . PHP_EOL;
    echo "Nome: " . $valor['nome'] . PHP_EOL;
    echo "Número de Alunos: " . $valor['numeroAlunos'] . PHP_EOL;
    echo "Faculdades: " . $valor['faculdades'] . PHP_EOL;
    echo "Fundação: " . $valor['fundacao'] . PHP_EOL;
    echo PHP_EOL;
}
?>
