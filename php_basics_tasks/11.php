<?php
	$day = mt_rand(0, 10);
	switch($day)
	{
		case 6: echo "Это выходной день";
			break;
		case 7: echo "Это выходной день";
			break;
		default: echo "Мимо";
			break;
	}