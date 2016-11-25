<?php
	$day = mt_rand(0, 10);
	switch($day)
	{
		case 1: echo "Это рабочий день";
			break;
		case 2: echo "Это рабочий день";
			break;
		case 3: echo "Это рабочий день";
			break;
		case 5: echo "Это рабочий день";
			break;
		default: echo "Мимо";
			break;
	}