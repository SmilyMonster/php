<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Room</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.
    Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>
<hr />
<form method="POST" action="stopsubmit.php">
    <div class="comments">
        <dl>
            <?=showComments();?>
        </dl>
    </div>
    <label>Ваше имя:
        <input type="text" name="userName" placeholder="Max" />
    </label>
    <textarea name="comment" id="" cols="30" rows="10" placeholder="Оставте комментарий"></textarea>
    <input type="submit" value="Submit" />
</form>

</body>
</html>