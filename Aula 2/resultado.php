<?php

    $operacao = $_POST['operacao'];
    $n1 = (int) $_POST['n1'];
    $n2 =(int) $_POST['n2'];


    if($operacao == 'multiplicacao'){
        echo $n1 * $n2;
    }
    elseif($operacao == 'subtracao'){
        echo $n1 - $n2;
    }
    elseif($operacao == 'adicao'){
        echo $n1 + $n2;
    }
    elseif($operacao == 'divicao'){
        echo $n1 / $n2;
    }
    else{
        echo("o valor n e valido");
    }

?>

