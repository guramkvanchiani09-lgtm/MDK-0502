<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Вложенные циклы</h1>
<h2>Задание 1</h2>
<p>С помощью вложенных циклов вывести на экран таблицу умножения.</p>
<?php
for ($i=1;$i<=9;$i++){
    for($q=1;$q<=9;$q++){
        echo "$i*$q=".$i*$q."<br>";
    }
}?>
<h2>Задание 2</h2>
<p>Даны размеры прямоугольника a и b. Вывести на экран прямоугольник, состоящий из символов Х

пример: а=4 в=3

ХХХХ

ХХХХ

ХХХХ</p>
<?php
$a=4;
$b=3;
for ($i=1;$i<=$b;$i++){
    for($w=1;$w<=$a;$w++){
        echo "X";
    } echo "<br>";
}?>
<h2>Задание 3</h2>
<p>Реализовать задачу1 в виде именно HTML таблицы, ИСПОЛЬЗУЯ теги table> tr> td>. Размеры ячеек должны быть равными и у них должны быть границы.</p>
<head>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <table>
        <tr> <th>Цифры/Произведения</th>
            <?php for ($i=1;$i<=9;$i++) echo "<th>$i</th>"
            ?>
        </tr>
        <tr> 
           <?php
        for ($d = 1; $d <= 9; $d++) {
            echo "<tr>";
            echo "<th>$d</th>"; 
            for ($e = 1; $e <= 9; $e++) {
                $square = $d * $e;
                echo "<td>$square</td>";
            }
            echo "</tr>";
        }?>

        </tr>    
          
    </table>
</body>
</html>

<h2>Задание 4</h2>
<p>Вывести в виде HTML таблицу квадратов двузначных чисел</p>
<head>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <table>
        <tr><th>Десятки \ Единицы</th>
            <?php for ($e = 0; $e <= 9; $e++) echo "<th>$e</th>"; ?>
        </tr>
        <tr>
        <?php
        for ($d = 1; $d <= 9; $d++) {
            echo "<tr>";
            echo "<th>$d</th>"; 
            for ($e = 0; $e <= 9; $e++) {
                $number = $d * 10 + $e;
                $square = $number * $number;
                echo "<td>$square</td>";
            }
            echo "</tr>";
        }?>
        
        </tr>

       </table> 
</body>
</html>

<h1>Задание 5</h1>
<p>Вывести на экран «прямоугольник», образованный из двух видов символов. Контур прямоугольника должен состоять из одного символа, а в «заливка» — из другого. Даны размеры прямоугольника а и в.</p>
<?php
$a = 6;
$b = 4; 
$border = "#";
$fill   = "."; 
for ($i = 0; $i < $b; $i++) {
    for ($j = 0; $j < $a; $j++) {
        if ($i == 0 || $i == $b - 1 || $j == 0 || $j == $a - 1) {
            echo $border;
        } else {
            echo " ".$fill;
        }
    }
    echo "<br>";
}?>

<h1>Задание 6</h1>
<p>Найти все делители натурального числа п.</p>
<?php
$p=8;

echo "Делители числа $p:";
for ($i = 1; $i <= $p; $i++) {
    if ($p % $i == 0) {
        echo $i . "   ";
    }
}?>