<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>

<?php
$result = '';
if(isset($_POST['textArea']))
{
	$sentece = $_POST['textArea'];
	$result = topLongWords($sentece);
}

function topLongWords($sentece)
{
	$wordArray = explode(' ', $sentece);
	$wordsLenghs = array();
    foreach ($wordArray as $word)
	{
        $wordsLenghs[mb_strlen($word)] = $word;
    }
    ksort($wordsLenghs);
    for ($i = 0; $i < 3; $i++) {
    	$return[] = array_pop($wordsLenghs);
    }
    return implode(' ', $return);
}

?>
<hr />
<form action="2.php" method="POST" style="display: flex; justify-content: space-between; max-width: 768px; margin: 0 auto; align-items: center;">
	<textarea name="textArea" cols="30" rows="10" placeholder="Type it here ..." style=" height: 150px; width: 50%;"></textarea>
	<input type="submit" name="submit" value="Отправить" style="width:10%; height: 100px; margin: 0 10px; border-radius: 10px;" />
	<textarea name="result" cols="30" rows="10" readonly style=" background-color: #e9fbeb; width: 40%; height: 150px" placeholder="Результат будет сдесь."><?=$result;?></textarea>
</form>

