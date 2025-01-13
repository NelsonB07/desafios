<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Máquina do Tempo</title>
</head>
<body>
    <?php 
        $atual = date("Y"); 
        $nasc = $_GET["n1"] ?? '2000';  
        $ano = $_GET["n2"] ?? $atual; 
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Em que ano você nasceu?</label>
            <input type="number" name="n1" id="n1" value="<?=$nasc?>" min="1900" max="<?=($atual -1)?>" required>
            <label for="n2">Quer saber sua idade em qual ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="n2" id="n2">
            <input type="submit" value="Qual será minha idade?" value="<?=$ano?>" min="1900" required>
        </form>
    </main>
    <section>
        <?php 
            $idade = $ano - $nasc;  
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong>  em <?=$ano?>!</p>
    </section>
</body>
</html>