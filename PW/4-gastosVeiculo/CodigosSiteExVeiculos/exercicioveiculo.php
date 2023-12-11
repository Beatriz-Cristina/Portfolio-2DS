<?php
$qtdkm = $_POST["a"]; 
$mediakm = $_POST["b"]; 
$precocombustivel = $_POST["c"];
	
	$qtdlitros = $qtdkm/$mediakm;
	$valortotal = $qtdlitros * $precocombustivel;
	
echo "<br><br><br><br><br> O valor a ser gato pelo veículo é de: $valortotal reais ";
?>
