<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$arquivo = $_FILES['arquivo']['name'];
$destino = 'c:/xampp/htdocs/img/' . $arquivo;
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
move_uploaded_file( $arquivo_tmp, $destino);
$placa=			$_POST["placa"];
$veiculo=		$_POST["veiculo"];
$marca= 		$_POST["marca"];
$cor=			$_POST["cor"];
$ano=			$_POST["ano"];
$proprietario=	$_POST["proprietario"];
$fone=			$_POST["fone"];
$opcionais=		$_POST["opcionais"];
$con=mysqli_connect("localhost","root","","detran") or die ("erro!");

$in = "insert into veiculos values (
					'$placa', 
					'$veiculo', 
					'$marca',
					'$cor',
					'$ano',
					'$proprietario', 
					'$fone', 
					'$opcionais',
					'$arquivo')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   Placa:$placa<BR>
   Veículo:$veiculo<BR>
   Marca:$marca<BR>
   Cor:$cor<BR>
   Ano:$ano<BR>
   Proprietário:$proprietario<BR>
   Fone:$fone<BR>
   Opcionais: $opcionais<BR>
   <img src = img/$arquivo width=05% heigth=05%><hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>

