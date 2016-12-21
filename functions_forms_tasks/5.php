<p>5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.</p>
<hr />

<?php

    function findWord($directory, $word)
    {
        $fileList = array();
        if($directory = opendir('.'))
        {
            while($entry = readdir($directory))
            {
                if(strpos($entry, $word) === 0)
                    $fileList[] = $entry;
            }
            closedir($directory);
        }
        echo '<pre>';
        print_r($fileList);
        echo '</pre>';
    }