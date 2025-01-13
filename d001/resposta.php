<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 

                $numero = $_REQUEST["num"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "O número escolhido foi <strong>$numero</strong>";
                echo "<br>O seu antecessor é $antecessor";
                echo "<br>O seu sucessor é $sucessor";

            ?>
            <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        </p>
    </main>
</body>
</html>