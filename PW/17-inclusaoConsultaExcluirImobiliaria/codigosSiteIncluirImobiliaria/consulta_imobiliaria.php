<HTML>
<BODY>
<?php
$expressao=		$_POST["expressao"];
$bd=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");


if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="id")
		$consulta=mysqli_query($bd,"select * from imoveis where id='$expressao'");
	if ($op=="cidade")
		$consulta=mysqli_query($bd,"select * from imoveis where cidade='$expressao'");
	if ($op=="bairro")
		$consulta=mysqli_query($bd,"select * from imoveis where bairro='$expressao'");
	if ($op=="dono")
	    $consulta=mysqli_query($bd,"select * from imoveis where dono='$expressao'");
	if ($op=="tipo")
		$consulta=mysqli_query($bd,"select * from imoveis where tipo='$expressao'");
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
	$id = $reg["id"];
	$descricao = $reg["descricao"];
	$tipo = $reg["tipo"];
	$endereco = $reg["endereco"];
	$cidade = $reg["cidade"];
	$bairro = $reg["bairro"];
	$uf = $reg["uf"];
	$quartos = $reg["quartos"];
	$comodos = $reg["comodos"];
	$aluguel = $reg["aluguel"];
	$venda = $reg["venda"];
	$dono = $reg["dono"];
	$fone = $reg["fone"];
	$celular = $reg["celular"];
	$email = $reg["email"];
	
	echo   "<hr>ID imoveel: $id<br>
			Descricao: $descricao<br>
			Tipo: $tipo<br>
			Endereco: $endereco<br>
			Cidade: $cidade<br>
			Bairro: $bairro<br>
			UF: $uf<br>
			Quantidade de quartos: $quartos<br>
			Quantidade de comodos: $comodos<br>
			Aluguel: $aluguel<br>
			Venda: $venda<br>
			Proprietario: $dono<br>
			Fone: $fone<br>
			Celular: $celular<br>
			Email: $email<hr>"
			
	?>
	<a href="excluir.php?pl=<?php echo $id;?>" onclick = return confirm ('Exclui o registro?')>Excluir</a>
	
	<a href="alterar.php?pl=<?php echo $id;?>">Alterar</a>
	
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="consulta_imobiliaria.html">Voltar</a><br>
</body>
</html>