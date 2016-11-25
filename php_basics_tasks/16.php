<?php
    $a = mt_rand(0, 10);
    $b = mt_rand(0, 10);
    echo "a = {$a}"."<br />";
    echo "b = {$b}"."<br />";
        if ($a > $b)
            echo " 'a' больше 'b' ";
        else
            echo " 'b' больше 'a' ";