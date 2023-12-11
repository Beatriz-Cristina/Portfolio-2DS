<?php
$valortotal = $_POST["a"]; 
$op = $_POST["op"];
if ($op == "1")
	$desconto = 1 - 0.05;
    $valorfinal = valortotal * $desconto;
	echo "<br><br><br><br><br>O valor final com 5% de desconto é de $valorfinal reais.";

if ($op == "2")
	$desconto = 1 + 0.05;
    $valorfinal = valortotal * $desconto;
	$parcelas = $valorfinal/2;
	echo "<br><br><br><br><br>O valor final com 5% de acréscimo é de $valorfinal reais e o valor de cada parcela será de $parcelas reais.";

if ($op == "3")
	$desconto = 1 + 0.07;
    $valorfinal = valortotal * $desconto;
	$parcelas = $valorfinal/3;
	echo "<br><br><br><br><br>O valor final com 7% de acréscimo é de $valorfinal reais e o valor de cada parcela será de $parcelas reais.";

?>
