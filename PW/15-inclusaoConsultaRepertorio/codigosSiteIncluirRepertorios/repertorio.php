<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Repertorio</title>
 <style>
		body{
		background-image: linear-gradient(to bottom right, #00FFFF, #6495ED);
		} 
		</style>
</head>
<body>
<?php
$codigo=			$_POST["codigo"];
$nome=		$_POST["nome"];
$genero= 		$_POST["genero"];
$compositor=			$_POST["compositor"];
$interprete=			$_POST["interprete"];
$datalancamento=	$_POST["datalancamento"];
$duracao=			$_POST["duracao"];
$tipo=			$_POST["tipo"];
$letra=		$_POST["letra"];
$con=mysqli_connect("localhost","root","","repertorio") or die ("erro!");
$in = "insert into musicas values (
					'$codigo', 
					'$nome', 
					'$genero',
					'$compositor',
					'$interprete',
					'$datalancamento', 
					'$duracao',
					'$tipo', 
					'$letra')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   Codigo:$codigo<BR>
   Nome:$nome<BR>
   Genero:$genero<BR>
   Compositor:$compositor<BR>
   Interprete:$interprete<BR>
   Data de lancamento:$datalancamento<BR>
   Duracao:$duracao<BR>
   Tipo musica:$tipo<BR>
   Letra: $letra<hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='repertorio.html'>Voltar</a><BR>";
?>
</body>
</html>
