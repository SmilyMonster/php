<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p>
<?php
for($i=2; $i<=10; $i +=2){
    for($j=0; $j<$i; $j++){
        echo 'x';
    }
    echo '<br />';
}