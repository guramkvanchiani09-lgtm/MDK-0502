<h1>Типы данных в PHP</h1>
<h2>Целые числа-int</h2>
<?php
$number=100;
$number_1=0b01;
echo $number;
?>
<h2>Числа с плавающей точкой-float<h2>
<?php
$a=-42.5;
$b=42.;
$c=1.5e5;
$d=2.4E-3;
echo "$a, $b,$c,$d";
?>
<h2>Строки-string</h2>
<?php
$str='Переменная а=$a';
$str1="Переменная а=$a";
$str2="WWW";
echo $str,'<br>',$str1,$str2;
?>
<h2>Логические значения--bool</h2>
<?php
$f=false;
$t=true;
echo "t=$t,f=$f";
?>
<h2>Специальное значение null</h2>
<?php
$n=null;
$y;
echo "n=$n";
?>
