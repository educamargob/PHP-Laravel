<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exe 1 e 2</title>
</head>
<body>
<?php 
#Ex1------------------- 
 $meses = [
        "Janeiro" => "January",
        "Fevereiro" => "February",
        "Março" => "March",
        "Abril" => "April",
        "Maio" => "May",
        "Junho" => "June",
        "Julho" => "July",
        "Agosto" => "August",
        "Setembro" => "September",
        "Outubro" => "October",
        "Novembro" => "November",
        "Dezembro" => "December"
    ];
function retorna_mes($mes, $meses){

    return $meses[$mes];
}
echo retorna_mes("Janeiro", $meses ,), "<br>";
echo "----------------------------------- <br>";

#Ex1-------------------
#Ex2-------------------
foreach($meses as $mes){
    echo $mes, "<br>" ;
}

#Ex2-------------------

?>

</body>
</html>