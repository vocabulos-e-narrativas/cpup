<?php
// No arquivo index.php (ou config.php, por exemplo)
define('BASE_URL', 'http://localhost/CPUP/');

function formatarData($data) {
    $meses = array(
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro'
    );

    $parts = explode('-', $data);
    $ano = $parts[0];
    $mes = $parts[1];
    if (isset($parts[2])) {
        $dia = $parts[2];
        $mes_texto = $meses[(int) $mes];

        return $dia . ' de ' . $mes_texto . ' de ' . $ano;
    } else {
        $mes_texto = $meses[(int) $mes];
        return $mes_texto . ' de ' . $ano;
    }
}