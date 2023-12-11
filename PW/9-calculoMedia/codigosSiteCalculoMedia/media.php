<?php
$nota1	= 	$_POST ["nota1"];
$nota2	=	$_POST ["nota2"];
$trab1	= 	$_POST ["trab1"];
$trab2	=	$_POST ["trab2"];

$medianotas = 0;
$mediatrabs = 0;
$mediatotal = 0;

$medianotas = ($nota1 + $nota2)/2;
$mediatrabs = ($trab1 + $trab2)/2;
$mediatotal = ($medianotas * 0.8) + ($mediatrabs * 0.2);

if $mediatotal >= 6
echo"O aluno foi aprovado, com média = $mediatotal<br>";

else
echo"O aluno foi reprovado, com média = $mediatotal<br>";
?>