<?php
$arr = array(
              "January",   "February", "March",    "April",
              "May",       "June",     "July",     "August",
              "September", "October",  "November", "December"
            );
$month = date("F");
foreach($arr as $value):
    if($month == $value)
        echo "<b>".$value."</b>"."<br />";
    else
        echo $value."<br />";
endforeach;