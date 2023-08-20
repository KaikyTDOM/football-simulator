<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Resultado</title>
</head>
<body>
<?php

    $time1 = $_POST["times-a"];
    $time2 = $_POST["times-b"];

    $gols1 = rand(0, 6);
    $gols2 = rand(0, 6);

    $timesImagens = array(
        "América-MG" => "assets/img/america-mineiro.jpg",
        "Athletico-PR" => "assets/img/athletico-paranaense.jpg",
        "Atlético-MG" => "assets/img/atletico-mineiro.jpg",
        "Bahia" => "assets/img/bahia.jpg",
        "Botafogo" => "assets/img/botafogo.jpg",
        "Corinthians" => "assets/img/corinthians.jpg",
        "Coritiba" => "assets/img/coritiba.jpg",
        "Cruzeiro" => "assets/img/cruzeiro.jpg",
        "Cuiabá" => "assets/img/cuiaba.jpg",
        "Flamengo" => "assets/img/flamengo.jpg",
        "Fluminense" => "assets/img/fluminense.jpg",
        "Fortaleza" => "assets/img/fortaleza.jpg",
        "Goiás" => "assets/img/goias.jpg",
        "Grêmio" => "assets/img/gremio.jpg",
        "Internacional" => "assets/img/internacional.jpg",
        "Palmeiras" => "assets/img/palmeiras.jpg",
        "Bragantino" => "assets/img/red-bull-bragantino.jpg",
        "Santos" => "assets/img/santos.jpg",
        "São Paulo" => "assets/img/sao-paulo.jpg",
        "Vasco da Gama" => "assets/img/vasco-da-gama.jpg",
    );

    if(array_key_exists($time1, $timesImagens)) {
        $emblemaTime1 = $timesImagens[$time1];
    }
    else{
        echo "Nenhuma imagem disponível para o time selecionado.";
    }

    if(array_key_exists($time2, $timesImagens)) {
        $emblemaTime2 = $timesImagens[$time2];
    }
    else{
        echo "Nenhuma imagem disponível para o time selecionado.";
    }

    echo '<div class="resultado">';
    if(isset($time1)){
        echo "<img src='$emblemaTime1' alt='$time1' class='img-time1'><span class='time'>$time1</span> <span class='gols'>$gols1</span> X ";
    }

    if(isset($time2)){
        echo "<span class='gols'>$gols2</span> <span class='time'>$time2</span><img src='$emblemaTime2' alt='$time2' class='img-time2'><br>";
    }

    if($gols1 > $gols2){
        echo "<span class='vencedor'>$time1 ganhou!!</span>";
    }
    else{
        if($gols1 < $gols2){
            echo "<span class='vencedor'>$time2 ganhou!!</span>";
        }
        else{
            if($gols1 == $gols2){
                echo "<span class='empate'>O jogo terminou empatado.</span>";
            }
        }
    }

    echo "<a href=index.html class='btn-return'>
        Voltar
    </a>";

    echo '</div>';
    ?>
</body>
</html>
