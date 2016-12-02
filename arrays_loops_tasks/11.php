<?php
	for($i=0; $i <= 100; $i++)
	{
		if($i%2)
			continue;
		else
			echo $i.'<br />';
	}