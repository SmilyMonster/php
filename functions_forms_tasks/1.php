<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
    Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>
<?php

$result = '';

if(isset($_POST['firstTextArea'], $_POST['secondTextArea']))
{
    $a = $_POST['firstTextArea'];
    $b = $_POST['secondTextArea'];
    $result = getCommonWords($a, $b);
}

function getCommonWords($a, $b)
{
    $firstExplode = explode(' ', $a);
    $secondExplode = explode(' ', $b);
    $intersect = array_intersect($firstExplode, $secondExplode);
    $result = implode(' ', $intersect);

    return $result;
}
?>

<hr />
<form action="1.php" method="POST" style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 600px; margin: 0 auto;">
    <textarea name="firstTextArea" cols="30" rows="10" placeholder="Type it here ..." style=" height: 150px; width: 49%;"></textarea>
    <textarea name="secondTextArea" cols="30" rows="10" placeholder="Type it here ..." style="width: 49%; height: 150px"></textarea>
    <input type="submit" name="submit" value="Сравнить" style="width:100%; height: 50px; margin: 10px 0"/>
    <textarea name="result" cols="30" rows="10" readonly style="width: 100%; height: 150px; background-color: #e9fbeb;" placeholder="Результат будет сдесь."><?=$result;?></textarea>
</form>
