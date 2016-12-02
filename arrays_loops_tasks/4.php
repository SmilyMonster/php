<?php
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    foreach($arr as $key => $colors)
    {
        echo $key.'<br />';
    }
    foreach($arr as $value)
    {
        echo $value.'<br />';
    }