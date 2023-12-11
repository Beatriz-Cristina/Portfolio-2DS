<?php
$valoringresso = $_POST["a"]; 
$qtdingresso = $_POST["b"];
$op = $_POST["op"];
if ($op == "1")
	$valortotal = $valoringresso * $qtdingresso;
    $desconto = 1 - 0.5;
	$valorfinal = $valortotal * $desconto;
	echo "<br><br><br><br><br>O valor final com 50% de desconto é de $valorfinal reais.";

if ($op == "2")
	$valortotal = $valoringresso * $qtdingresso;
    $desconto = 1 - 0.4;
	$valorfinal = $valortotal * $desconto;
	echo "<br><br><br><br><br>O valor final com 40% de desconto é de $valorfinal reais.";

if ($op == "3")
	$valortotal = $valoringresso * $qtdingresso;
    $desconto = 1 - 0.3;
	$valorfinal = $valortotal * $desconto;
	echo "<br><br><br><br><br>O valor final com 30% de desconto é de $valorfinal reais.";

if ($op == "4")
	$valorfinal = $valoringresso * $qtdingresso;
	echo "<br><br><br><br><br>O valor final é de $valorfinal reais.";


?>