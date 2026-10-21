<h1>Массивы</h1>
<h2>Создание пустого массива</h2>
<?php
$number=[45,43];
?>  <h2>Создание массива</h2>
<?php
$numer1=[12,23,43,5,6];
?>  <h2>Вывод массива на экран</h2>
<?php
var_dump($numer1) ;//только для откладки
?>  <h2>Перебор массива</h2>
<?php
for( $i= 0; $i< count($numer1); $i++ ){
    echo $numer1[$i], " ";
}?> <h2>Элементы массива</h2>
<?php
echo $numer1[0];//Первый элемент
echo $numer1[0]='$$$';
?> <h2>Добавление элемента</h2>
<?php
var_dump($numer1)
?> <h2>Цикл foreach</h2>
<?php
foreach($numer1 as $number){
    echo $number,' ';
}
?>


