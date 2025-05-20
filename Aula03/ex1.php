<?php
 $nota = $_POST ["nota"];

    while ($nota <1 || $nota > 10){
        echo "Nota inválida <br>";
        return;
    }
    echo "Você digitou a nota $nota";

?>