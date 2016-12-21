<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>

<?php

function getFilesList($directory)
{
    $fileList = array();
    if($directory = opendir('.'))
    {
        while($entry = readdir($directory))
        {
            if(is_file($entry))
                $fileList[] = $entry;
        }
        closedir($directory);
    }
    echo '<pre>';
    print_r($fileList);
    echo '</pre>';
}