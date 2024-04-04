<?php

class Pessoa
{
    //Atributos
    private $nome;
    private $idade;
    private $profissao;

    //Construtor
    public function __construct($nome, $idade, $profissao)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;

    }

//metodo (ações)

    public function GetNome()
    {
        echo "getNome: $this->nome <br>";
    }
    public function GetIdade()
    {
        echo "getIdade: $this->idade <br>";
    }
    public function GetProfissao()
    {
        echo "getProfissao: $this->profissao <br>";
    }

    //ação de apresentar
    public function Apresentar()
    {
        echo "
---------------------<br>
Nome: $this->nome<br>
Idade: $this->idade<br>
Profissão: $this->profissao<br>
";
    }
}
