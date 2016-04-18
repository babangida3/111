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
</marquee></font><br>
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

function rec($x){
	while ($x <= 15) {
		echo "$x ";
		$x = $x + 1;
	}
}	
ab(7, 5);
ab(4, 5);
ab(0, 0);
$x = 7;
switch ($x){
	case 0: rec($x);break;
	case 1: rec($x);break;
	case 2: rec($x);break;
	case 3: rec($x);break;
	case 4: rec($x);break;
	case 5: rec($x);break;
	case 6: rec($x);break;
	case 7: rec($x);break;
	case 8: rec($x);break;
	case 9: rec($x);break;
	case 10: rec($x);break;
	case 11: rec($x);break;
	case 12: rec($x);break;
	case 13: rec($x);break;
	case 14: rec($x);break;
	case 15: rec($x);break;
}

function sum1($a, $b){
	return $a + $b;
}
function div1($a, $b){
	if ($b == 0)	{
	echo "You can't division on zero!";
	}
	else
	return $a / $b;
	}

function mult1($a, $b){
	return $a * $b;
}
function sub1($a, $b){
	return $a - $b;
}
echo "<br>";
echo sum1(-1, 4);
echo "<br>";
echo div1(-1, 4);
echo "<br>";
echo mult1(-1, 4);
echo "<br>";
echo sub1(-1, 4);
echo "<br>";

function abc($a, $b, $op){
	switch ($op)
	{
	case 'sum': echo sum1($a, $b);
	break;
	case 'div': echo div1($a, $b);
	break;
	case 'mult':echo  mult1($a, $b);
	break;
	case 'sub':echo sub1($a, $b);
	break;
	}
}
abc(1, 5, mult);

function power ($val, $pow) {
	$res = $val;
	if ($pow > 0) {
		while ($pow > 1){
			$res = $res * $val;
			$pow = $pow - 1;
		}
	return $res;
	}
	elseif ($pow < 0) {
		$pow = abs($pow);
		while ($pow > 1){
			$res = $res * $val;
			$pow = $pow - 1;
		}
	return (1 / $res);
	}
	else
	return 1;
}

echo "<br>";
echo power(3, 3);
echo "<br>";
echo date('G i s');
echo "<br>";



function tt () {
	$ch = date("G");
	if ($ch == 1 || $ch == 21){
		$c = "час";
	}
	elseif  ($ch == 2 || $ch == 3 || $ch == 4 || $ch == 22 || $ch == 23){
		 $c = "часа";
	}
	else $c = "часов";
	
	$mi = date(i);
	if ($mi == 1 || $mi == 21 || $mi == 31 || $mi == 41 || $mi == 51){
		 $m = "минута";
	}
	elseif ($mi == 2 || $mi == 3 || $mi == 4 || $mi == 22 || $mi == 23 || $mi == 24 || 
$mi == 32 || $mi == 33 || $mi == 34 || $mi == 42 || $mi == 43 || $mi == 44 || $mi == 52 || 
$mi == 53 || $mi == 54){
		 $m = "минуты";
		}
	else $m = "минут";
		
	echo date("G $c i $m");
}

tt();
echo "<br>";
function tt_cool(){
$pat_1 = '^[02345]?1$';
$pat_2 = '^[02345]?[234]$';
	if (preg_match($pat_1, date("G"))){
		$c = "час";
	}	
	elseif (preg_match($pat_2, date("G"))) {
		$c = "часа";
	}
	else $c = "часов";

	if (preg_match($pat_1, date("i"))) {
		$m = "минута";
	}
	if (preg_match($pat_2, date("i"))) {
		$m = "минуты";
	}
	else $m = "минут";
echo date("G $c i $m");
}
tt_cool();



echo "<br>";
//echo preg_match("[23]", date("G i");



?>
  </body>
</html>

