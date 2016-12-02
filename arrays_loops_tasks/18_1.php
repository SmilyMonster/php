<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.</p>
<?php
$arr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$dayOff = array("Saturday", "Sunday");
$hol = false;
foreach($arr as $val)
{
    for ($i = 0; $i < count($dayOff); $i++)
    {
        if ($val == $dayOff[$i])
            $hol = true;
    }
    if($hol)
        echo "<b>".$val."</b>"."<br />";
    else
        echo $val ."<br />";
}