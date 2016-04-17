<html>
<head><title> zagolovok </title></head>
<body>
	primer raboti php:<br/>
	<?php
	$x = 5;
	echo $x;
	echo ' hello!';
?>
<font size = "50"><center><br><marquee direction = "up", bgcolor = "red", width = "200"></center>
ХУЙ!!!
</marquee>
<?php

function ab($a, $b) {
	if ($a >= 0 && $b >= 0){
		$c = $a - $b;
		echo "$c<br>";
	}
	elseif ($a < 0 && $b < 0){
		$c = $a * $b;
		echo "$c<br>";
	}
	else {
		$c = $a + $b;
		echo "$c<br>";
	}
}
ab(7, 5);
ab(4, 5);
ab(0, 0);
/*
function sum1($a, $b){
	return $a + $b;
}
function div1($a, $b){
	if $b <> 0 {
	return $a / $b;
	}
	else echo "You can't division on zero!";
}
function mult1($a, $b){
	return $a * $b;
}
function sub1($a, $b){
	return $a - $b;
}
//echo sum(-1, 4);
//echo div(-1, 4);
//echo mult(-1, 4);
//echo sub(-1, 4);

*/


?>
  </body>
</html>

