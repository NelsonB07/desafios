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
        <h1>Conversor de Moedas</h1>
        <?php
        // cotação cópiada do google
        $cotacao = 6.11; 

        // Quanto dinheiro você tem? 
        $real = $_GET["din"]; 

        // Equivalência em dólar 
        $dolar = $real / $cotacao; 

        // Mostrar resultado 
        //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", "."); 

        // Foprmatação de moedas com internacionalização! 
        // Biblioteca intl (Internallization PHP)

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); 

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>"; 

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
