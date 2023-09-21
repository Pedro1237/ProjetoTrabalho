<?php
try {
    // Estabelece uma conexão com o banco de dados SQLite usando o arquivo "dado.sqlite"
    $banco = new PDO("sqlite:dado.sqlite");
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define uma instrução SQL para criar a tabela "UNIVERSIDADE" se ela não existir
    $criarTabela = "CREATE TABLE IF NOT EXISTS UNIVERSIDADE (
        localizacao TEXT,
        nome TEXT,
        numeroAlunos TEXT,
        faculdades TEXT,
        fundacao TEXT,
        PRIMARY KEY (fundacao)
    )";

    // Executa a instrução SQL para criar a tabela no banco de dados
    $banco->exec($criarTabela);
} catch (PDOException $e) {
    // Em caso de erro na conexão, exibe uma mensagem de erro
    echo "Erro no momento de acionar o banco!";
    die();
}
?>