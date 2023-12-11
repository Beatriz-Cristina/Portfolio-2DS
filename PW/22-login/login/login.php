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
$email=		$_POST["email"];
$senha=		$_POST["senha"];
$bd=mysqli_connect("localhost","root","","empresa") or die ("erro!");

$consulta=mysqli_query($bd,"select * from usuarios where email='$email' && senha='$senha'");
$reg = mysqli_fetch_array($consulta);
if ($reg==0)
{
	echo "Usuario bloqueado!";
	exit;
}
while ($reg!=0)
{
	$id_user = $reg["id_user"];
	$nome = $reg["nome"];
	
	echo   "$id_user <br> Bem vindo(a) $nome";
			
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="login.html">Voltar</a><br>
</body>
</html>