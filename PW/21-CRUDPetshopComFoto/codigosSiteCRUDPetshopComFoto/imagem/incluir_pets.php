<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Incluir pets</title>
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
$arquivo = $_FILES['arquivo']['name'];
$destino = 'c:/xampp/htdocs/imagem/img/' . $arquivo;
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
move_uploaded_file( $arquivo_tmp, $destino);

$id=			$_POST["id"];
$nome_pet=		$_POST["nome_pet"];
$nascimento= 		$_POST["nascimento"];
$especie=			$_POST["especie"];
$raca=			$_POST["raca"];
$cor_predominante=	$_POST["cor_predominante"];
$observacoes=			$_POST["observacoes"];
$tutor=			$_POST["tutor"];
$fone=		$_POST["fone"];
$email= $_POST["email"];
$con=mysqli_connect("localhost","root","","petshop") or die ("erro!");

$in = "insert into pets values (
					'$id', 
					'$nome_pet', 
					'$nascimento',
					'$especie',
					'$raca',
					'$cor_predominante', 
					'$observacoes',
					'$tutor', 
					'$fone',
					'$email',
					'$arquivo')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   Id:$id<BR>
   Nome pet:$nome_pet<BR>
   Nascimento:$nascimento<BR>
   Especie:$especie<BR>
   Raça:$raca<BR>
   Cor predominante:$cor_predominante<BR>
   Observações:$observacoes<BR>
   Tutor:$tutor<BR>
   Fone: $fone<BR>
   Email: $email<BR>
   <img src = img/$arquivo width=05% heigth=05%><hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir_pets.html'>Voltar</a><BR>";
?>
</body>
</html>