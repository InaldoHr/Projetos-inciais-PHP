<!-- php -->
<?php
//váriaveis com propriedades da página:
$titulo_pagina = "Listagem do Funcionários";
$funcionario_logado = "Inaldo";

$funcionarios = ["Pedro", "Lorran", "Davi", "Gustavo", "Amanda", "Ana Beatriz", "Inaldo"];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>
</head>

<body>
    <h1>Olá <?php echo $funcionario_logado; ?></h1>
    <h2>Listagem de funcionarios</h2>

    <ul>
        <?php foreach ($funcionarios as $nome) {  ?>
            <li><?= $nome; ?></li>
        <?php } ?>
    </ul>

    <ul>
        <?php
        foreach ($funcionarios as $nome) {
            echo "<li>$nome</li>";
        }
        ?>
    </ul>

</body>

</html>