<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.</p>

<?php
if(isset($_POST['num']))
{
    $num = $_POST['num'];
    $arr = array_map('intval', str_split($num));
    $checkNum = $_POST['checkNum'];
    $count = 0;
    foreach ($arr as $val):
        if($val == $checkNum)
            $count += 1;
        else
        continue;
    endforeach;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check the Number</title>
</head>
<body>
<hr/>
<form action="24.php" method="POST" style="margin: 20px;">
    <input type="number" name="num" value="" placeholder="Введите число" />
    <p>Выберите цифру и узнайте сколько раз она встречается в введеном числе.</p>
    <input type="text" size="13" name="checkNum" value="" placeholder="Выберите цифру" />
    <input type="submit" name="submit" value="Start" /><br/> <br/>
</form>
<?php
if(isset($_POST['submit']))
    echo "<p>Цифра '$checkNum' в числе '$num' встречатеся: '$count' раз(а).</p>";
?>
</body>
</html>

