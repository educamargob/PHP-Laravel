<?php

$meses = ["janeiro" => "January",
          "fevereiro" => "Febuary" ,
          "março" => "March",
          "abril" => "April" 
];
/*$mes = $_GET["mes"];
echo "O mês em inglês correspondente a $mes é ". $meses[$mes];*/

foreach($meses as $chave => $valor){
    echo "$chave => $valor<br>";
}

+