<?php

//vincular pessoa.class
require_once('Veiculo.class.php');

//objetos para dar valor incial ao nome, idade e profissao
$veiculo = new veiculo("Toyota", "Corolla", 2022, "Prata", 100000);

//chamar as funções (Metodos)
$veiculo->exibirInformacoes();

$veiculo->calcularIdade();

$veiculo->calcularDepreciacao();

$veiculo->ehNovo();

$veiculo->pintarVeiculo("Vermelho");

$veiculo->exibirInformacoes();

?>