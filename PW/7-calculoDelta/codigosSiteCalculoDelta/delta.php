<?php
$a	= 	$_POST ["a"];
$b	=	$_POST ["b"];
$c	=	$_POST ["c"];

$delta = 0;

$delta = $b * $b - (4 * $a * $c);

echo "Delta = $delta <br>";
?>