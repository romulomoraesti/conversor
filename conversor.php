<?php

//COLETA OS DADOS DO INPUT
$inputValor = filter_input(INPUT_GET, 'valor');
$inputMoeda = filter_input(INPUT_GET, 'moeda');

//FUNÇÃO RESPONSÁVEL PELO CÁLCULO
function converteMoeda($valor, $moeda) { 
    if($moeda == 1) {
        $novoValor = $valor * 5;
        echo 'Você possui R$ '. number_format($novoValor,2,',','.');
    } else if($moeda == 2) {
        $novoValor = $valor / 5;
        echo 'Você possui US$ '. number_format($novoValor,2,'.',',');
    }
}

converteMoeda($inputValor, $inputMoeda);