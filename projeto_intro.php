<?php


$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";


$nome = "Eduardo";
$idade = 30;

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
            echo "o nadador " . $nome . " Compete na categoria infantil";
    }
} elseif ($idade >= 13 && $idade <= 18) {


    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente')
            echo "o nadador " . $nome . " Compete na categoria adolescente";
    }
} else {

    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto')
            echo "o nadador " . $nome . " Compete na categoria adulto";
    }
}
