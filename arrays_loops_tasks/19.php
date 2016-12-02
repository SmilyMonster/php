<?php
$arr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$day = date("l");
foreach($arr as $val)
{
    if ($val == $day)
        echo "<i>".$val."</i>"."<br />";
    else
        echo $val."<br />";
}