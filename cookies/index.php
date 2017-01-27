 Пусть в массиве хранятся различные цвета для фона нашего сайта (5 цветов на выбор). Выбор цвета нужно сделать через поле ввода типа выпадающий список. Сделайте, чтобы браузер запоминал цвет фона сайта, куда мы заходим, на 5 минут, через 5 минут он снова становится тем, каким был по умолчанию и снова можно выбрать и задать цвет фона из выпадающего списка.
 <br>
 <br>


<?php
$colors = array("red", "green", "yellow", "blue", "brown");
$show = 1;

if(isset($_POST['colors']))
{
	$color = $_POST['colors'];
	setcookie('color', $color, time()+ 60 * 5);
	$show = 0;
}

if(isset($_COOKIE['color']))
{
	$color = $_COOKIE['color'];
	$show = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>COOCKIES</title>
</head>
<body style="background: <?=$color?>">
	<form method="POST" style="opacity: <?=$show?>">
		<select name="colors" id="colors">
		<?php
		foreach($colors as $color)
			echo "<option value=" . $color . ">" . $color . "</option>";
			?>
		</select>
		<input type="submit" value="Color">
	</form>
</body>
</html>