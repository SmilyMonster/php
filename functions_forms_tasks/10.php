<p>10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</p>

<?php
$result = '';
if(isset($_POST['textArea']))
{
    $text = $_POST['textArea'];
    $result = originalWordsCount($text);
}
function originalWordsCount($text)
{
    $wordsArr = explode(' ', $text);
    $countVal = array_count_values($wordsArr);
    $count = 0;
    foreach($countVal as $word => $amount):
        if($amount <= 1)
            $count += 1;
    endforeach;

    return $count;
}
?>
<hr />
<form action="10.php" method="POST" style="display: flex; justify-content: space-between; max-width: 768px; margin: 0 auto; align-items: center;">
    <textarea name="textArea" cols="30" rows="10" placeholder="Type it here ..." style=" height: 150px; width: 50%;"></textarea>
    <input type="submit" name="submit" value="Отправить" style="width:10%; height: 100px; margin: 0 10px; border-radius: 10px;" />
    <input type="text" name="result" value="В тексте <?php echo $result ? $result:"0"?> уникальных слов(a)." readonly style=" background-color: #e9fbeb; width: 40%; height: 50px" placeholder="Результат будет сдесь." />
</form>
