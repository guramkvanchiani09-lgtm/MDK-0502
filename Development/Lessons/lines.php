<h1>Перенос строк</h1>
<h2>Создание строк</h2>
<?php
$str='Hello';
$str1="word";
?>
<h2>Соединение строк</h2>
<?php
echo $str . ', ' . $str1 . '!','<br>';
echo "$str , $str1 ! <br>"
?>
<h2>обращение к символу</h2>
<?php
echo $str[0], ' - Первый символ', '<br>';
$sym=$str1[2];
$str1[2]='';
echo $str1, '<br';
?><h2>Длина строк</h2>
<?php
$len = strlen($str1);
echo "Длина строки $str1 - $len символов"
?>