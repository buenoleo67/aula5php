<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
    <link rel="stylesheet" href="index.css">
</head>
<body bgcolor="gray">
    <div>
        <h1>GET e POST + Controle de Fluxo (IF / ELSE)</h1>
    </div>
    <div>
        <h2>Variaveis Globais</h2>
        <p>
            <?php 
            echo $_SERVER["REQUEST_TIME"];
             ?>
        </p>
    </div>
    <div>
        <h2>Constantes</h2>
        <p>Definindo uma Constante
            <?php 
            define('SAUDACAO',' *Olá eu sou uma constante!');
            echo SAUDACAO;
            const CONSTANTE = 10;
            echo CONSTANTE;
            ?>
        </p>
    </div>
    <div>
        <h2>Formulários(GET E POST)</h2>
        <a href="formulario.html">Primeiro formulário PHP - GET
        </a>
        <p></p>
        <h2>Calculo</h2>
        <a href="calculo.php">Calcular Média - POST
        </a>
    </div>



</body>
</html>