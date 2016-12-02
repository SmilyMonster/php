<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = rand(2, 4);
$found = false;
foreach($arr as $value)
{
	if($value == $e)
		$found = true;
}
echo $found ? 'Есть!':'Нет!';
?>