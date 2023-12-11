<HTML>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Consultar pets</title>
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
$bd=mysqli_connect("localhost","root","","petshop") or die ("erro!");

if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="id")
		$consulta=mysqli_query($bd,"select * from pets where id='$expressao'");
	if ($op=="nome_pet")
		$consulta=mysqli_query($bd,"select * from pets where nome_pet='$expressao'");
	if ($op=="nascimento")
		$consulta=mysqli_query($bd,"select * from pets where nascimento='$expressao'");
	if ($op=="especie")
	    $consulta=mysqli_query($bd,"select * from pets where especie='$expressao'");
	if ($op=="raca")
		$consulta=mysqli_query($bd,"select * from pets where raca='$expressao'");
	if ($op=="tutor")
		$consulta=mysqli_query($bd,"select * from pets where tutor='$expressao'");
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
	$nome_pet = $reg["nome_pet"];
	$nascimento = $reg["nascimento"];
	$especie = $reg["especie"];
	$raca = $reg["raca"];
	$cor_predominante = $reg["cor_predominante"];
	$observacoes = $reg["observacoes"];
	$tutor = $reg["tutor"];
	$fone = $reg["fone"];
	$email = $reg["email"];
	$arquivo = $reg["arquivo"];
	
	echo   "<hr>ID: $id<br>
			Nome pet: $nome_pet<br>
			Nascimento: $nascimento<br>
			Especie: $especie<br>
			Raça: $raca<br>
			Cor predominante: $cor_predominante<br>
			Observacoes: $observacoes<br>
			Tutor: $tutor<br>
			Fone: $fone<br>
			Email: $email<br>
			<img src = img/$arquivo width=05% heigth=05%><hr>";
			
	?>
	<a href="excluir.php?pl=<?php echo $id;?>" onclick = "return confirm ('Exclui o registro?')">Excluir</a>
	
	<a href="alterar.php?pl=<?php echo $id;?>">Alterar</a>
	
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="consulta_pets.html">Voltar</a><br>
</body>
</html>