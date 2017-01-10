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
        $comment = filterComments($comment);
        $output .= <<<COMMENT
<div class = "wrapper">
    <dt>$userName</dt>
    <dd>$comment</dd>
</div>
COMMENT;
    }
    return $output;
}

function filterComments($comment)
{
    $badWords = array('fuck', 'buck', 'crack');
    foreach ($badWords as $badWord) {
        if (stripos($comment, $badWord) !== false)
            $comment = 'Некорректный комментарий';
    }
    return $comment;
}