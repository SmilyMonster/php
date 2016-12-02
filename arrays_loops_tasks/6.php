<?php
	$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    foreach($arr as $english => $russian)
    {
        $en[] = $english;
        $ru[] = $russian;
    }
echo '<pre>';
    var_dump($ru);
echo '</pre>';
echo '<pre>';
    var_dump($en);
echo '</pre>';