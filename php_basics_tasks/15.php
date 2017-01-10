<?php
if (isset($_POST['arg1'], $_POST['arg2'], $_POST['action']))
{
    $a = (int)$_POST['arg1'];
    $b = (int)$_POST['arg2'];
    $operator = $_POST['action'];
    $result;

    switch($operator)
    {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '%':
            $result = $a % $b;
            break;
        case '/':
            if ($b == 0){
                echo "На 0 делить нельзя";
            }
            else{
                $result = $a / $b;
            }
            break;
    }
}
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <meta charset="utf-8" />
</head>
<body class="container">
<br />
<br />
<br />
<div style="text-align: center">
    <form method = "POST">
        <div class="form-group">
            <label for="arg1">Аргумент №1
                <input id="arg1" class="form-control" type="number" name="arg1" required />
            </label>
        </div>
        <div class="form-group">
            <label for="arg2">Аргумент №2
                <input id="arg2" class="form-control" type="number" name="arg2" required />
            </label>
        </div>
        <div class="form-group">
            <label for="action">Математическое действие
                <input id="action" class="form-control" type="text" name="action" maxlength="1" placeholder="Можно вводить: + - * /" />
            </label>
        </div>
        <div class="form-group">
            <label for="result">Результат:
                <input id="result" class="form-control" type="text" value="<?=isset($result) ? $result : ''?>" readonly/>
            </label>
        </div>
        <input type="submit" value="Посчитать" />
    </form>
</div>
</body>
</html>

