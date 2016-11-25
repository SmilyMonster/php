<?php
	$age = "42";
	if (!is_string($age))
	{
		if ($age > 0 && $age <= 17)
			echo "Вам еще рано работать";
		if ($age < 59 && $age > 18)
			echo "Вам еще работать и работать";
		if ($age > 59)
			echo "Вам пора на пенсию";
	}
	if (is_string($age) || $age < 0)
		echo "Неизвестный возраст";