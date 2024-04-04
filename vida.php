<?php

require_once('Humano.class.php');

$humano = new Humano("Inaldo", 3.5, "Masculino");

$humano->MostrarDados();
$humano->Comer();
$humano->Comer();
$humano->Comer();
$humano->Exercitar();
$humano->Crescer();
$humano->MostrarDados();

$humano->Comer();
$humano->Comer();
$humano->Comer();
$humano->Exercitar();
$humano->Exercitar();
$humano->Crescer();
$humano->MostrarDados();




?>