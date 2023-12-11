<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
background-image: linear-gradient(to bottom right, #66ccff, #0000cc);
color: white;
font-family: Times New Roman, Arial Black;
font-size: 14pt;
text-align: left;
}
</style>
<body>
<?php

	$id_voo = $_GET["pl"];
	
		$bd = mysqli_connect("localhost","root","","aeroporto") or die ("erro!");
		
		$excluir = mysqli_query($bd,"delete from voos where id_voo = '$id_voo'");
		
			if($excluir ==1)
				echo "Registro excluido!";
			else
				echo "Registro não excluido!";	
?>
<br><a href="consulta_voos.html">Voltar para nova consulta</a><br>
</body>
</html>