<HTML>
<BODY>
<?php
$expressao=		$_POST["expressao"];
$bd=mysqli_connect("localhost","root","","repertorio") or die ("erro!");


if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="codigo")
		$consulta=mysqli_query($bd,"select * from musicas where codigo='$expressao'");
	if ($op=="nome")
		$consulta=mysqli_query($bd,"select * from musicas where nome='$expressao'");
	if ($op=="genero")
		$consulta=mysqli_query($bd,"select * from musicas where genero='$expressao'");
	if ($op=="interprete")
	    $consulta=mysqli_query($bd,"select * from musicas where interprete='$expressao'");
	if ($op=="datalancamento")
		$consulta=mysqli_query($bd,"select * from musicas where datalancamento='$expressao'");
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
	$codigo = $reg["codigo"];
	$nome = $reg["nome"];
	$genero = $reg["genero"];
	$compositor = $reg["compositor"];
	$interprete = $reg["interprete"];
	$datalancamento = $reg["datalancamento"];
	$duracao = $reg["duracao"];
	$tipo = $reg["tipo"];
	$letra = $reg["letra"];
	
	echo   "<hr>codigo da musica: $codigo<br>
			Nome: $nome<br>
			Genero: $genero<br>
			Compositor: $compositor<br>
			Interprete: $interprete<br>
			Data de lancamento: $datalancamento<br>
			Duracao: $duracao<br>
			Tipo: $tipo<br>
			Letra: $letra<hr>"
			
	?>
	<a href="excluir.php"?pl=<?php echo $codigo;?> onclick = return confirm ('Exclui o registro?')>Excluir</a>
	
	<a href="alterar.php"?pl=<?php echo $codigo;?>>Alterar</a>
	
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="consulta_repertorio.html">Voltar</a><br>
</body>
</html>