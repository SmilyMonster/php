<?php
	$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
    foreach($arr as $name => $zp)
    {
        echo $name.' зарплата '. $zp.' долларов.'.'<br />';
    }