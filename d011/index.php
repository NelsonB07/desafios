<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustar Preços</title>
</head>
<body>
    <?php 
        $preco = $_REQUEST['pro'] ?? '0';
        $reaj = $_REQUEST['por'] ?? '0';
        
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="pro">Preço do Produto (R$)</label>
            <input type="number" name="pro" id="pro" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="por">Qual será o percentual de reajuste? <strong><span id="p">?</span>%</strong></label> 
            <input type="range" name="por" id="por" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <?php 
        $aumento = $preco * $reaj / 100; 
        $novo = $preco + $aumento; 
    ?>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <strong>R$<?=number_format($preco, 2, ",", ".")?></strong>, com <strong><?=$reaj?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novo, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>

    <script>
        // Declarações automáticas 
        mudaValor()

        function mudaValor() {
            p.innerText = por.value; 
        }
    </script>

</body>
</html>