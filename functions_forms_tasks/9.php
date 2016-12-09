<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>
<hr />

<?php
function upSideDown($str)
{
 //   Простой способ
    $string = strrev($str);
    echo $string;

    //Замысловатый способ
//    $chars = array();
//    $chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
//    $charsRev = array_reverse($chars);
//    $result = implode($charsRev);
//    echo $result;
}
upSideDown('abcde');