<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
$found = false;
if(isset ($_GET['number']))
{
	$e = $_GET['number'];
	foreach ($arr as $value)
	{
		if ($value == $e)
			$found = true;
	}
	echo $found ? 'Есть!' : 'Нет!';
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>N14</title>
</head>
<body>
	<p>Есть массив с элементами. Проверьте есть ли в данном массиве значение 2, 3 или 4</p>

	<form action="14_1.php" method="GET">
		<input type="number" name = "number" placeholder="Выбери 2, 3 или 4" /><br />
		<input type="submit" name="submit" value="Проверить" />
	</form>
</body>
</html>