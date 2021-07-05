<?php
    $n = $_GET['n1'];
    $m = $_GET['n2'];

    $mmc = $m;
    $valorAnterior = $n;
    $valorAtual = $m;

    $valorRestante = $valorAnterior % $valorAtual;

    if ($n < $m) {
        echo('O segundo não pode ser maior que o primeiro!');
    } 
    else {
        while ($valorRestante != 0) {
            $valorAnterior = $valorAtual;
            $valorAtual = $valorRestante;
            $valorRestante = $valorAnterior % $valorAtual;
        }

        for ($i = 2; $i < $m; $i++) { 
            if (($n % $i  == 0) && ($m % $i == 0)) {
                $mmc = $i;
                break;
            }
        }

        echo('O MDC é igual: '.$valorAtual.'.<br>');
        echo('O MMC é igual: '.$mmc.'.');
    }
?>