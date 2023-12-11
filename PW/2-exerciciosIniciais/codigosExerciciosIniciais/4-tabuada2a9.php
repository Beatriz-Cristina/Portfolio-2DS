<?php
$a = 0;
$b = 0;
$c = 0;

echo"Tabuada dos números de 2 a 9:<br>";

for($a=2;$a<=9;$a++)
{
	for($b=1;$b<=10;$b++)
	{
		$c = $a * $b;
		echo "$a X $b = $c <br>";
	}
}
?>
