<html>
<body>
<?php

	$placa = $_GET["pl"];
	
		$bd = mysqli_connect("localhost","root","","detran") or die ("erro!");
		
		$excluir = mysqli_query($bd,"delete from veiculos where placa = '$placa'");
		
			if($excluir ==1)
				echo "Registro excluido!";
			else
				echo "Registro não excluido!";	
?>
<br><a href="consultar.html">Voltar para nova consulta</a><br>
</body>
</html>