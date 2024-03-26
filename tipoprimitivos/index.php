<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>

<body>
    <h1>Tipos primitivos</h1>
    <h2>com numeros binarios</h2>
    <?php

    $num = 0x1A;  //numero hexadecimal
    $num2 = 0b1011;  //numero nbinario
    $num3 = (float)3e2; //forçou coerção
    $num4 = (float) 950;
    var_dump($num3, $num, $num2, $num4); //mostra o tipo


    echo "O valor da varialve é $ $num e $num2 e $num3 e $num4";

    ?>

</body>

</html>
