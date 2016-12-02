<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>
<?php
echo '<hr />';
	for($i = 1; $i <= 10; $i++)
    {
        echo '<table  style = "margin: 25px; float: left">';
        for($j = 2; $j <= 10; $j++)
        {
            $result = $i*$j;
            echo <<<TABLE
                    <tr>
                        <td>{$i}</td>
                        <td>*</td>
                        <td>{$j}</td>
                        <td>=</td>
                        <td>{$result}</td>
                    </tr>
TABLE;
        }
        echo '</table>';
    }