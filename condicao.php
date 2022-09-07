<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="bemvindo.css">
    <title>Resultado Média</title>
</head>
<body bgcolor="grey">
    <div>
        <h1>Calculo de Média</h1>
            <?php
            $nota1= $_POST["valor1"];
            $nota2= $_POST["valor2"];
            $media = ($nota1 + $nota2)/2; 
             ?>
             <p>
             Sua média é <?php echo $media; ?></p>
    </div>

    
</body>
</html>