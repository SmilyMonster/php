<p>22. Приведите число -20 к типу boolean. Объясните результат.</p>

<?php
$a =  -20;
$a = (boolean) $a; //Явное приведение. Имя требуемого типа записывается в скобках перед приводимой переменной.
settype($a, 'bool');// Можно присвоить переменной новый тип с помощью функции.