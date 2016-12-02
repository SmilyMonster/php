<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 0;
    foreach($arr as $v):
        $count += 1;
        if ($count % 3)
            echo $v.', ';
        else
            echo $v.'<br />';
    endforeach;
