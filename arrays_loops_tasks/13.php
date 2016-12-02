<?php
	for($i = 1; $i <= 10; $i++)
	{
		echo '<table  style = "margin: 50px; float: left">';
		for($j = 2; $j <= 10; $j++)
		{
			$result = $i*$j;
			echo '<tr>';
				echo '<td>'.$i.'</td>';
				echo '<td>'.'*'.'</td>';
				echo '<td>'.$j.'</td>';
				echo '<td>'.'='.'</td>';
				echo '<td>'.$result.'</td>';
			echo '</tr>';
		}
		echo '</table>';
	}