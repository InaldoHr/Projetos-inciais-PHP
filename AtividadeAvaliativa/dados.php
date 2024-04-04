<?php

//vincular pessoa.class
require_once('Pessoa.class.php');

//objetos para dar valor incial ao nome, idade e profissao
$pessoa = new pessoa("Inaldo", 17, "Desempregado");
$pessoa2 = new pessoa("Estevão", 28, "Professor");
$pessoa3 = new pessoa("Rauliane", 16, "confeiteira");

//chamar as funções (Metodos)
$pessoa->GetNome();
$pessoa->GetIdade();
$pessoa->GetProfissao();

$pessoa->Apresentar();
$pessoa2->Apresentar();
$pessoa3->Apresentar();



?>