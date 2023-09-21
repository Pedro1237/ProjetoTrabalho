<?php
class RepositorioUniversidade {
    // Método para cadastrar uma universidade no banco de dados
    public function cadastrar(Universidade $universidade, PDO $pdo) {
        // Define a instrução SQL para inserir os dados da universidade na tabela
        $codigoSql = "INSERT INTO UNIVERSIDADE (localizacao, nome, numeroAlunos, faculdades, fundacao) VALUES (:l, :n, :a, :f, :c)";

        // Obtém os valores das propriedades da universidade
        $localizacao = $universidade->localizacao;
        $nome = $universidade->nome;
        $numeroAlunos = $universidade->numeroAlunos;
        $faculdades = $universidade->faculdades;
        $fundacao = $universidade->fundacao;

        // Prepara a instrução SQL para inserção
        $inserir = $pdo->prepare($codigoSql);

        // Define os parâmetros da instrução SQL
        $inserir->bindParam(":l", $localizacao);
        $inserir->bindParam(":n", $nome);
        $inserir->bindParam(":a", $numeroAlunos);
        $inserir->bindParam(":f", $faculdades);
        $inserir->bindParam(":c", $fundacao);

        // Executa o comando de inserção no banco de dados
        $inserir->execute();
    }

    // Método para listar todas as universidades no banco de dados
    public function listar(PDO $pdo) {
        // Define a instrução SQL para selecionar todos os registros da tabela
        $sql = "SELECT * FROM UNIVERSIDADE";

        // Executa a consulta SQL no banco de dados
        $select = $pdo->query($sql);

        // Retorna os resultados como um array associativo
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
