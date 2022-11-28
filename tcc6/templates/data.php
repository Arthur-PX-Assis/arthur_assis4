<?php
$hj = date('d'); $hj2 = date('m'); $hj3 = date('Y'); 
$dev = date('d', strtotime('+7 days')); $dev2 = date('m', strtotime('+7 days')); $dev3 = date('Y', strtotime('+7 days')); 
 
$txt=$hj3 . "-" . $hj2 . "-" . $hj; $txt2=$dev3 . "-" . $dev2 . "-" . $dev;

$datahj = date_create($txt);
$datadevolucao = date_create($txt2);
$resultado = date_diff($datadevolucao, $datahj);
$resultado2 = date_interval_format($resultado, '%a');
?>