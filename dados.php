<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <div>
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"-";
        $sobrenome = isset($_GET["sobrenome"])?$_GET["sobrenome"]:"-";
        $genero = isset($_GET["gender"])?$_GET["gender"]:"-";
        echo "$nome $sobrenome é do genero $genero.";
        ?>
        <a href ="index.html">Voltar</a>
    </div>
</body>
</html>