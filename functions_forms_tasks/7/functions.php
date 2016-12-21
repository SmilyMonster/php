<?php

function addComment($userName, $comment)
{
    $data = array($userName, $comment);
    $openF = fopen('comments.txt', 'a+');
    $serialized = serialize($data).PHP_EOL;
    fwrite($openF, $serialized);
    fclose($openF);
}

function showComments()
{
    $openF = fopen('comments.txt', 'r');
    $output = '';
    while($string = fgets($openF))
    {
        $data = unserialize($string);
        list($userName, $comment) = $data;
        $output .= <<<COMMENT
<dt>$userName</dt>
<dd>$comment</dd>
COMMENT;
    }
    return $output;
}