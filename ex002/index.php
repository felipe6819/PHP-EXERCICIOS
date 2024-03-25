<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>

<body>
    <h1>Exeemplo PHP</h1>
    <?php
    date_default_timezone_set("america/sao_paulo");
    echo "hoje é dia" . date("d/m/y");
    echo "e a hora atual é " . date("G:i:s");
    $nome = "Felipe";
    //varial usa sifrao e pode ser mudado
    $sobrenome = "Lima";
    //constatnt nao pode ser mudada
    const PAIS = "Braisl";
    //recomendado na usar acento em pais 
    //
    echo "     E ai galera sou, $nome $sobrenome ! voce mora no " . PAIS;

    ?>

</body>

</html>