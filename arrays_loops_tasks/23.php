<p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т. е. 6.</p>
По желанию можете сделать проверку на корректность введения данных пользователем.
<?php
if(isset($_POST['num']))
{
    $num = $_POST['num'];
    $arr = array_map('intval', str_split($num));
    $sum = 0;
    foreach ($arr as $val):
        $sum += $val;
    endforeach;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate sum</title>
</head>
<body>
<hr/>
<p style="margin: 20px;">Введите более 5 цифр, чтобы узнать их сумму.</p>

<form action="23.php" method="POST" style="margin: 20px;">
    <input type="number" name="num" value="Введите число больше тыячи"/>
    <input type="submit" name="submit" value="Посчитать"/><br/> <br/>
</form>
<?php
if(isset($_POST['submit']))
    echo "Сумма цифер числа '$num' равна: $sum.";
?>
</body>
</html>
