<?php
$age = mt_rand(10, 70);
$tomorrow  = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
$yesterday = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);
setcookie('age', $age, time()+60*60);// установили на 1 час
setcookie('age', $age, time()+3*60*60);// установили на 3 часа
setcookie('age', $age, time()+24*60*60);// установили на 1 день
setcookie('age', $age, time()+365*24*60*60);// установили на 1 год
setcookie('age', $age, time()+10*365*24*60*60);// установили на 10 лет
setcookie('age', $age, $tomorrow);// установили до конца текущего дня
setcookie('age', $age, $yesterday);// установили до конца текущего года

var_dump($_COOKIE['age']);

?>
