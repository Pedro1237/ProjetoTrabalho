<?php
require "conexao.php";
require "Universidade.php";
require "RepositorioUniversidade.php";

// Cria uma instância da classe Universidade com dados fictícios
$Universidade1 = new Universidade("Rio de Janeiro", "Estácio", "48", "Oi", "2009");

// Cria uma instância do RepositorioUniversidade
$repositorioUniversidade = new RepositorioUniversidade();

// Chama o método cadastrar para inserir a universidade no banco de dados
$repositorioUniversidade->cadastrar($Universidade1, $banco);

echo "Universidade cadastrada com sucesso!";
?>
