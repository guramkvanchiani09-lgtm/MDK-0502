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
<!DOCTYPE html>
<html>
<head>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 5px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Десятки \ Единицы</th>
            <?php for ($e = 0; $e <= 9; $e++) echo "<th>$e</th>"; ?>
        </tr>
        
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
        }
        ?>
    </table>
</body>
</html>

<h2>Задание 4</h2>
<p>Вывести в виде HTML таблицу квадратов двузначных чисел</p>
<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Число</th><th>Число в квадрате</th></tr>";
for ($i=10; $i<100; $i++) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . ($i **2 ) . "</td>";
    echo "</tr>";
}
echo "</table>";?>
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
