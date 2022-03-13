<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exe 3</title>
</head>
<body>
    <?php 
    #Ex1 Aula-----------------------------------
    $valori = 10000;
    $taxa = 0.006;
    $tempo = 8;

    $valorf = $valori * (1 + $taxa)**$tempo;
    echo $valorf, "<br><br>";
    #Ex1 Aula-----------------------------------
    #Ex2 Aula-----------------------------------
    function calc_invest($vi, $tax, $temp){
        $vf = $vi * (1 + $tax)**$temp;
        echo "Valor final de retorno:";
        return $vf;
    }
    echo calc_invest(1000, 0.005, 5), "<br>";
    echo calc_invest(30234, 0.008, 12), "<br>";
    echo calc_invest(50000, 0.008, 24), "<br><br>";
    #Ex2 Aula-----------------------------------
    #Ex3----------------------------------------
    echo calc_invest(10000, 0.003, 6), "<br>";
    echo calc_invest(10000, 0.005, 9), "<br>";
    echo calc_invest(10000, 0.009, 12), "<br>";
    #Ex3----------------------------------------
    ?>
</body>
</html>