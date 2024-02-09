<?php 

$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

$valorGasolina = 5.09;
$valorAlcool = 4.59;
$valorDiesel = 4.99;
$mensagem = "";

if (is_numeric($autonomia) && is_numeric($distancia)){ //é numérica??
    if (($distancia > 0) && ($autonomia > 0)){ //é maior que zero?

        $consumoGasolina = ($distancia / $autonomia) * $valorGasolina;
        
        $consumoGasolina = number_format($consumoGasolina,2,',','.');

        $consumoAlcool = ($distancia / $autonomia) * $valorAlcool;

        $consumoAlcool = number_format($consumoAlcool,2,',','.');

        $consumoDiesel = ($distancia / $autonomia) * $valorDiesel;
        
        $consumoDiesel = number_format($consumoDiesel,2,',','.');
    
        

        $mensagem.= "<div class='sucesso'>";
        $mensagem.= "O valor total gasto será de:";
        $mensagem.= "<ul>";
        $mensagem.= "<li><b>Gasolina:<b> R$ ".$consumoGasolina."</li>";
        $mensagem.= "<li><b>Alcool:<b> R$ ".$consumoAlcool."</li>";
        $mensagem.= "<li><b>Diesel:<b> R$ ".$consumoDiesel."</li>";
        $mensagem.= "</ul>";
        $mensagem.= "</div>";
    } else {
        $mensagem.= "<div class='erro'>";
        $mensagem.= "<b>O valor da distancia e da autonomia deve ser maior que zero.</b>";
        $mensagem.= "</div>";
    }
} else {
    $mensagem.= "<div class='erro'>";
    $mensagem.= "<b>Nenhum dado foi recebido pelo formulário</b>";
    $mensagem.= "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel">
                <?php
                echo $mensagem;
                ?>
                <a href="index.php" class="botao">Voltar</a>
            </div>
        </div>
    </main>
    
</body>
</html>