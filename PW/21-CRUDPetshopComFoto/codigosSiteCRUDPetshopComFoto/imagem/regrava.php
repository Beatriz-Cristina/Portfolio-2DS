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
$bd = mysqli_connect("localhost","root","","petshop") OR DIE ("Erro ao conectar!");

$id=				$_POST["id"];
$nome_pet=			$_POST["nome_pet"];
$nascimento= 		$_POST["nascimento"];
$especie=			$_POST["especie"];
$raca=				$_POST["raca"];
$cor_predominante=	$_POST["cor_predominante"];
$observacoes=		$_POST["observacoes"];
$tutor=				$_POST["tutor"];
$fone=				$_POST["fone"];
$email= 			$_POST["email"];

$arquivo = $_FILES['arquivo']['name'];
$destino = 'c:/xampp/htdocs/imagem/img/' . $arquivo;
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
move_uploaded_file( $arquivo_tmp, $destino);

$regrava = mysqli_query($bd, "update pets set id='$id', nome_pet='$nome_pet', nascimento='$nascimento', especie='$especie', raca='$raca', cor_predominante='$cor_predominante', observacoes='$observacoes', tutor='$tutor', fone='$fone', email='$email', arquivo='$arquivo' where id='$id'");

if ($regrava==1)
{
	echo   "ID: $id<br>";
	echo	"Nome pet: $nome_pet<br>";
	echo	"Nascimento: $nascimento<br>";
	echo	"Especie: $especie<br>";
	echo		"Raça: $raca<br>";
	echo		"Cor predominante: $cor_predominante<br>";
	echo		"Observacoes: $observacoes<br>";
	echo		"Tutor: $tutor<br>";
	echo		"Fone: $fone<br>";
	echo		"Email: $email<br>";
	echo "<img src = img/$arquivo width=05% heigth=05%><hr>";
	
    echo "Obrigado por participar - Registro Alterado. <br><br>  ";
}
else
{
    echo "ERRO - Registro não Alterado. <br><br> ";
}
echo "<a href='consulta_pets.html'>Voltar para nova consulta</a>";
?>

</body>
</html>
