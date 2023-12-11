<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Imobiliaria</title>
</head>
<body>
<?php
$id=			$_POST["id"];
$descricao=		$_POST["descricao"];
$tipo= 		$_POST["tipo"];
$endereco=			$_POST["endereco"];
$cidade=			$_POST["cidade"];
$bairro=	$_POST["bairro"];
$uf=			$_POST["uf"];
$quartos=			$_POST["quartos"];
$comodos=		$_POST["comodos"];
$aluguel= 		$_POST["aluguel"];
$venda=			$_POST["venda"];
$dono=			$_POST["dono"];
$fone=	$_POST["fone"];
$celular=			$_POST["celular"];
$email=			$_POST["email"];
$con=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");
$in = "insert into imoveis values (
					'$id', 
					'$descricao', 
					'$tipo',
					'$endereco',
					'$cidade',
					'$bairro', 
					'$uf',
					'$quartos', 
					'$comodos', 
					'$aluguel',
					'$venda',
					'$dono',
					'$fone', 
					'$celular',
					'$email')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   ID:$id<BR>
   Descricao:$descricao<BR>
   Tipo:$tipo<BR>
   Endereco:$endereco<BR>
   Cidade:$cidade<BR>
   Bairro:$bairro<BR>
   UF:$uf<BR>
   Quantidade de quartos:$quartos<BR>
   Quantidade de comodos:$comodos<BR>
   Preco aluguel:$aluguel<BR>
   Preco venda:$venda<BR>
   Proprietario:$dono<BR>
   Fone:$fone<BR>
   Celular:$celular<BR>
   Email: $email<hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>
</body>
</html>

<!-- $con=mysql_pconnect("localhost","root","") or die ("erro!");
//mysql_select_db("detran); -->