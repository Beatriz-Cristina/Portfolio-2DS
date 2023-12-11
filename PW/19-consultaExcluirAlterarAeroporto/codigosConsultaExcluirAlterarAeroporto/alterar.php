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

$id_voo=trim($_GET["pl"]);

$bd = mysqli_connect("localhost","root","","aeroporto") or die ("erro!");
//$bd=mysqli_connect("localhost","root","") or die("Não consigo conectar");
//mysql_select_db("aeroporto");

$sql="select * from voos where id_voo = '$id_voo'"; //consulta sql

$consulta=mysqli_query($bd ,$sql); //faz a consulta de todos os reg
$reg=mysqli_fetch_array($consulta); // cria uma matriz com todos os campos e reg

if ($reg==0)
{
	 echo "ERRO - Registro não Existe.  ";
	 exit;
}
else
{
	$id_voo=$reg["id_voo"];
    $destino=$reg["destino"];
	$conexao = $reg["conexao"];
	$valor_passagem = $reg["valor_passagem"];
	$empresa = $reg["empresa"];
	$embarque = $reg["embarque"];
	$desembarque = $reg["desembarque"];
	$data = $reg["data"];
    $obs=$reg["obs"];
    
}
?>
<center><h2>Alterar registro</center>
	<form method="POST" action="regrava.php">
		<p> <input type="hid_vooden" size="10" name="id_voo" value ='<?php echo "$id_voo"; ?>'>
		
		<p>Id voo:			<input type="int" size="04" name="id_voo" maxlength="04" value ='<?php echo "$id_voo"; ?>'></p>
		<p>Destino:			<input type="text" size="200" name="destino" value ='<?php echo "$destino"; ?>'></p>
		<p>Conexão:			<input type="text" size="400" name="conexao" value ='<?php echo "$conexao"; ?>'></p>
		<p>Valor passagem:	<input type="double" size="12,2" name="valor_passagem" value ='<?php echo "$valor_passagem"; ?>'></p>
		<p>Empresa:			<input type="text" size="100" name="empresa" value ='<?php echo "$empresa"; ?>'></p>
		<p>Embarque:		<input type="time" name="embarque" value ='<?php echo "$embarque"; ?>'></p>
		<p>Desembarque:		<input type="time" name="desembarque" value ='<?php echo "$desembarque"; ?>'></p>
		<p>Data:	  	    <input type="date" name="data" value ='<?php echo "$data"; ?>'></p>
		<p>Obs.:  	        <textarea rows="6" cols ="60" size="400" name = "obs" value ='<?php echo "$obs"; ?>'></textarea></p>
		
		<input type="submit" name="B1" value="Alterar" onclick="regrava.php"></p>
     
	</form>	
	
</body>
</html>