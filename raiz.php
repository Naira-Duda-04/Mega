<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

        <?php

    $valor1 = $_GET["valor"];
    $valor2= $_GET["valor"];
    $valor3 = $_GET["valor"];
    

    echo "O valor informado foi o $valor<br/><br/>";

    $raizq = sqrt($valor);
    $raizq = number_format($raizq, 2, '.', '');
    
    echo " A raiz de $valor é igual a $raizq";

    ?>


</body>

</html>