<?php
	$n = 1000;
	$num = 0;
		while($n > 50)
		{
			$num += 1;
			$n /= 2;
		}
	echo 'При прохождении '.$num.' итераций деления 1000 на 2, перво число, которое меньше 50 составляет '.$n;