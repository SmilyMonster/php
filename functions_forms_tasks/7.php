<p>7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.</p>

<?php

    $comments = array();
    if(isset($_POST['submit'])&& isset($_POST['comment']))
    {
        $comment = $_POST['comment'];
    }
    array_push($comments, $comment);
?>
<hr />
<ul>
    <?php
        foreach($comments as $val)
            echo "<li>".$val."</li>";
    ?>
</ul>
<form action="7.php" method="POST">
    <input type="text" name="comment" />
    <input type="submit" name="submit" value="Send" />
</form>
