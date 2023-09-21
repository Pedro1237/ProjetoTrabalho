<?php
class Universidade{
    public $localizacao;
    public $nome;
    public $numeroAlunos;
    public $faculdades;
    public $fundacao;

    // Método construtor que inicializa os valores das propriedades ao criar um objeto
    public function __construct(string $localizacao, string $nome, string $numeroAlunos, string $faculdades, string $fundacao){
        $this->definirLocalizacao($localizacao);
        $this->definirNome($nome);
        $this->definirNumeroAlunos($numeroAlunos);
        $this->definirFaculdades($faculdades);
        $this->definirFundacao($fundacao);
    }

    // Métodos para definir os valores das propriedades
    public function definirLocalizacao(string $localizacao){
        $this->localizacao = $localizacao;
    }

    public function definirNome(string $nome){
        $this->nome = $nome;
    }

    public function definirNumeroAlunos(string $numeroAlunos){
        $this->numeroAlunos = $numeroAlunos;
    }

    public function definirFaculdades(string $faculdades){
        $this->faculdades = $faculdades;
    }

    public function definirFundacao(string $fundacao){
        $this->fundacao = $fundacao;
    }

    // Métodos para obter os valores das propriedades
    public function exibirLocalizacao(){
        return $this->localizacao;
    }

    public function exibirNome(){
        return $this->nome;
    }

    public function exibirNumeroAlunos(){
        return $this->numeroAlunos;
    }

    public function exibirFaculdades(){
        return $this->faculdades;
    }

    public function exibirFundacao(){
        return $this->fundacao;
    }
}
