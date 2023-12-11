<html>
<body>
<?php

	$id = $_GET["pl"];
	
		$bd = mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");
		
		$excluir = mysqli_query($bd,"delete from imoveis where id = '$id'");
		
			if($excluir ==1)
				echo "Registro excluido!";
			else
				echo "Registro não excluido!";	
?>
<br><a href="consulta_imobiliaria.html">Voltar para nova consulta</a><br>
</body>
</html>