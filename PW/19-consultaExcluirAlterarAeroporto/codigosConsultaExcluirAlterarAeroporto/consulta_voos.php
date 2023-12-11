<HTML>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Consultar voos</title>
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
<BODY>
<?php
$expressao=		$_POST["expressao"];
$bd=mysqli_connect("localhost","root","","aeroporto") or die ("erro!");


if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="id_voo")
		$consulta=mysqli_query($bd,"select * from voos where id_voo='$expressao'");
	if ($op=="destino")
		$consulta=mysqli_query($bd,"select * from voos where destino='$expressao'");
	if ($op=="empresa")
		$consulta=mysqli_query($bd,"select * from voos where empresa='$expressao'");
	if ($op=="data")
	    $consulta=mysqli_query($bd,"select * from voos where data='$expressao'");
} else
{
	echo "volte a página e escolha o campo que fará a pesquisa";
	exit;
}
$reg = mysqli_fetch_array($consulta);
if ($reg==0)
{
	echo "Não existem registros para a pesquisa!";
	exit;
}
while ($reg!=0)
{
	$id_voo = $reg["id_voo"];
	$destino = $reg["destino"];
	$conexao = $reg["conexao"];
	$valor_passagem = $reg["valor_passagem"];
	$empresa = $reg["empresa"];
	$embarque = $reg["embarque"];
	$desembarque = $reg["desembarque"];
	$data = $reg["data"];
	$obs = $reg["obs"];
	
	echo   "<hr>Id voo: $id_voo<br>
			Destino: $destino<br>
			Conexão: $conexao<br>
			Valor da passagem: $valor_passagem<br>
			Empresa: $empresa<br>
			Embarque: $embarque<br>
			Desembarque: $desembarque<br>
			Data: $data<br>
			Obs.: $obs<hr>"
			
	?>
	<a href="excluir.php?pl=<?php echo $id_voo;?>" onclick = "return confirm ('Exclui o registro?')">Excluir</a>
	
	<a href="alterar.php?pl=<?php echo $id_voo;?>">Alterar</a>
	
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="consulta_voos.html">Voltar</a><br>
</body>
</html>