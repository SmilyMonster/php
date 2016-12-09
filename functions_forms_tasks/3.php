<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

<?php

$result = '';
$language = '';
$n = '';
$en = 'The PHP development team announces the immediate availability of PHP 7.1.0 Release Candidate 6. This release is the sixth and final release candidate for 7.1.0. All users of PHP are encouraged to test this version carefully, and report any bugs and incompatibilities in the bug tracking system.';
$ru = 'Все гости совершали обряд приветствования никому неизвестной, никому неинтересной и ненужной тетушки. Анна Павловна с грустным, торжественным участием следила за их приветствиями, молчаливо одобряя их. Все подходившие, из приличия не выказывая поспешности, с чувством облегчения исполненной тяжелой обязанности отходили от старушки, чтобы уж весь вечер ни разу не подойти к ней.';

if(isset($_POST['text']))
{
	if($_POST['text'] === "ru")
		$language = $ru;

	if ($_POST['text'] === "en")
		$language = $en;
}

if(isset($_POST['num']))
	$n = $_POST['num'];

$result = delWords($n, $language);

function delWords($n, $language)
{
	$wordsArray = explode(' ', $language);
	$shortWords = array();
	foreach($wordsArray as $word):
		if(mb_strlen($word) < $n)
			$shortWords[] = $word;
	endforeach;
	$newPoem = implode(' ', $shortWords);

	return $newPoem;
}
?>
<hr />
<form action="3.php" method="POST" style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width:800px; max-height:600px; margin: 0 auto; align-items: center;">
	<div class="radio" style=" height: 50px; width: 100%; display: flex; flex-wrap: wrap; margin: 5% 0;">
		Выберите язык текста:
		<input type="radio" name="text" value="ru" />Русский<br />
		<input type="radio" name="text" value="en" />English<br />
		<p style="width: 100%;">Слова, длина которых превышает
			<input type="text" name="num" style="width: 25px; height: 25px; border-radius: 5px; margin: 0 5px; text-align: center" value="<?=$n?>"/> символов, были удалены.</p>
	</div>
	<textarea name="poem" cols="30" rows="10" readonly style=" height: 150px; width: 50%;"><?=$language?></textarea>
	<div></div>
	<input type="submit" name="submit" value="Delete" style="width:8%; height: 50px; margin: 0 5px; border-radius: 10px;" />
	<textarea name="result" cols="30" rows="10" readonly style=" background-color: #e9fbeb; width: 40%; height: 150px" placeholder="Результат будет сдесь."><?=$result;?></textarea>
</form>
