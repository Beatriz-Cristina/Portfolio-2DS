<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
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
$bd = mysqli_connect("localhost","root","","aeroporto") OR DIE ("Erro ao conectar!");
$id_voo=				$_POST["id_voo"];
$destino=			$_POST["destino"];
$conexao= 		$_POST["conexao"];
$valor_passagem=			$_POST["valor_passagem"];
$empresa=				$_POST["empresa"];
$embarque=	$_POST["embarque"];
$desembarque=		$_POST["desembarque"];
$data=				$_POST["data"];
$obs=				$_POST["obs"];

$regrava = mysqli_query($bd, "update voos set id_voo='$id_voo', destino='$destino', conexao='$conexao', valor_passagem='$valor_passagem', empresa='$empresa', embarque='$embarque', desembarque='$desembarque', data='$data', obs='$obs' where id_voo='$id_voo'");

if ($regrava==1)
{
	echo   "Id voo: $id_voo<br>";
	echo	"Destino: $destino<br>";
	echo	"Conexão: $conexao<br>";
	echo	"Valor passagem: $valor_passagem<br>";
	echo		"Empresa: $empresa<br>";
	echo		"Embarque: $embarque<br>";
	echo		"Desembarque: $desembarque<br>";
	echo		"Data: $data<br>";
	echo		"Obs.: $obs<hr>";
    echo "Obrigado por participar - Registro Alterado. <br><br>  ";
}
else
{
    echo "ERRO - Registro não Alterado. <br><br> ";
}
echo "<a href='consulta_voos.html'>Voltar para nova consulta</a>";
?>

</body>
</html>
