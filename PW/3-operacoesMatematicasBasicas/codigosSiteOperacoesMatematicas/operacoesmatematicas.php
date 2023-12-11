<?php
$x = $_POST["a"]; 
$y = $_POST["b"]; 
$op = $_POST["op"];
if ($op == "+")
	$z = $x + $y;
if ($op == "-")
	$z = $x - $y;
if ($op == "*")
	$z = $x * $y;
if ($op == "/")
	$z = $x / $y;	
echo "<br><br><br><br><br>O resultado de $x $op $y = $z";
?>
