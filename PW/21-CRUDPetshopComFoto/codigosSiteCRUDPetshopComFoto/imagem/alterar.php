<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
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
$id=trim($_GET["pl"]);

$bd = mysqli_connect("localhost","root","","petshop") or die ("erro!");
//$bd=mysqli_connect("localhost","root","") or die("Não consigo conectar");
//mysql_select_db("petshop");

$sql="select * from pets where id = '$id'"; //consulta sql

$consulta=mysqli_query($bd ,$sql); //faz a consulta de todos os reg
$reg=mysqli_fetch_array($consulta); // cria uma matriz com todos os campos e reg

if ($reg==0)
{
	 echo "ERRO - Registro não Existe.  ";
	 exit;
}
else
{
	$id=$reg["id"];
    $nome_pet=$reg["nome_pet"];
	$nascimento = $reg["nascimento"];
	$especie = $reg["especie"];
	$raca = $reg["raca"];
	$cor_predominante = $reg["cor_predominante"];
	$observacoes = $reg["observacoes"];
	$tutor = $reg["tutor"];
    $fone=$reg["fone"];
    $email=$reg["email"];
	$arquivo=$reg["arquivo"];
    
}
?>
<center><h2>Alterar reg</center>
	<form method="POST" enctype="multipart/form-data" action="regrava.php">
		<p> <input type="hidden" size="10" name="id" value ='<?php echo "$id"; ?>'>
		
		<p>Id:					<input type="int" size="08" name="id" maxlength="08" value ='<?php echo "$id"; ?>'></p>
		<p>Nome pet:			<input type="text" size="50" name="nome_pet" value ='<?php echo "$nome_pet"; ?>'></p>
		<p>Nascimento:			<input type="date" name="nascimento" value ='<?php echo "$nascimento"; ?>'></p>
		<p>Especie:				<input type="text" size="30" name="especie" value ='<?php echo "$especie"; ?>'></p>
		<p>Raca:				<input type="text" size="30" name="raca" value ='<?php echo "$raca"; ?>'></p>
		<p>Cor predominante:	<input type="text" size="30" name="cor_predominante" value ='<?php echo "$cor_predominante"; ?>'></p>
		<p>Observacoes:			<textarea rows="6" cols ="60" size="200" name = "observacoes" value ='<?php echo "$observacoes"; ?>'></textarea></p>
		<p>Tutor:	     	    <input type="text" size="40" name="tutor" value ='<?php echo "$tutor"; ?>'></p>
		<p>Fone:	   	        <input type="text" size="40" name="fone" value ='<?php echo "$fone"; ?>'></p>
		<p>Email:	   	        <input type="text" size="70" name="email" value ='<?php echo "$email"; ?>'></p>
		<p>Foto: 			<input type="file" name="arquivo" value ="imagem"/></p>
  
		<input type="submit" name="B1" value="Alterar" onclick="regrava.php"></p>
     
	</form>	
	
</body>
</html>