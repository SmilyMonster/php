<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</p>
<?php
echo '<hr />';
$arr = array();
for($i=1; $i <=10; $i++)
    $arr[] = rand(1, 25);

echo '<pre>';
print_r($arr);
echo '</pre>';

$length = count($arr);
$max = $min = $arr[0];
$iMax = $iMin = 0;

for( $i = 0; $i < $length; $i++)
{
    if($arr[$i] > $max)
    {
        $max = $arr[$i];
        $iMax = $i;
    }
    if($arr[$i] < $min)
    {
        $min = $arr[$i];
        $iMin = $i;
    }
}
echo "max = $max min = $min";

$buf = $arr[$iMax];
$arr[$iMax] = $arr[$iMin];
$arr[$iMin] = $buf;

echo '<pre>';
print_r($arr);
echo '</pre>';


