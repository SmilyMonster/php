<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.</p>
<?php
$arr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
foreach($arr as $key => $val)
{
    if ($key > 4)
        echo "<b>".$val."</b>"."<br />";
    else
        echo $val."<br />";
}