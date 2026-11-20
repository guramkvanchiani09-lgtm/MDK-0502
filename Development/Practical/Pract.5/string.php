<h1>Lines (строки)</h1>
<h2>Задание 1.</h2>
<p>Дана строка символов, среди которых есть одна открывающаяся

и одна закрывающаяся скобка. Вывести на экран все символы,

расположенные внутри этих скобок.</p>
<p>"Hello (Good day) world!"</p>
<?php
$str="Hello (Good day) world!";
$len=strlen($str);
$sw=false;
$result="";
for ($i=0; $len>$i; $i++){
    if ($str[$i]==='('){
         $sw=true;
    }   
    if($sw){
    $result .= $str[$i];}

    if ($str[$i]===')'){
        $sw=false;
        break;}
}

echo "Результат : " . trim($result, '()');
?><h2>Задание 2</h2>
<p>Дана строка, заканчивающаяся точкой. Подсчитать, сколько

слов в строке.</p>
<p>"It’s a pleasure to meet you."</p>
<?php
$str1="It’s a pleasure to meet you.";
$len1=strlen($str1);
$wordsCount=0;
$q=false;
for ($i=0;$len1>$i;$i++){
    if ($str1[$i]!==' ' && $str1[$i]!=='.'){
        if(!$q){
            $wordsCount++;
            $q=true;
        }
    }else {
        $q=false;
    }
}echo "Количество слов: ". $wordsCount;?>
<h2>Задание 3</h2>
<p>Дана строка. Найти в ней те слова, которые начинаются и

оканчиваются одной и той же буквой. Вывести эти слова на экран.</p>
<p>"akula sait tort kniga"</p>
<?php
$str3 = "akula sait tort kniga";
$word = "";
$len = strlen($str3);

for ($i = 0; $i < $len; $i++) {
    if ($str3[$i] != " ") {
        $word .= $str3[$i];
    } else {
        if ($word !== "" && $word[0] == $word[strlen($word) - 1]) {
            echo $word . "<br>";
        }
        $word = "";
    }
}

// проверка последнего слова (после него нет пробела)
if ($word !== "" && $word[0] == $word[strlen($word) - 1]) {
    echo $word . "<br>";
}
?>

<h2>Задание 4</h2>
<p>Дана строка. Подсчитать, сколько различных символов встречается в ней. Вывести их на экран.</p>
<p>str = "yukjghuoiuyuhffyhj";</p>
<?php
$str4 = "yukjghuoiuyuhffyhj";
$len3 = strlen($str4); // Исправлено: $str4 вместо $str
$u = "";

for ($i = 0; $i < $len3; $i++) {
    $found = false;
    $uLen = strlen($u);
    
    for ($j = 0; $j < $uLen; $j++) {
        if ($str4[$i] === $u[$j]) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $u .= $str4[$i];
    }
}
echo "Различных символов: " . strlen($u) . "\n";
?>

<h2>Задание 5</h2>
<p>Дана строка. Подсчитать, сколько в ней букв r, k, t. </p>
<p>Строка : "ewkrkkkkktkkkttttttttttttttt"</p>
<?php
$str5="ewkrkkkkktkkkttttttttttttttt";
$len4=strlen($str5);
$r="";
$k="";
$t="";
for ($i = 0;$i<$len4;$i++){
    $found=false;
    $qLen = strlen($q);
    if($str5[$i] === "r"){
        $r .= $str5[$i];

    }
    if ($str5[$i] === "k"){
        $k.= $str5[$i];
    }
    if ($str5[$i] === "t"){
        $t .= $str5[$i];
    }

}
echo "Встречается R: " . strlen($r) . "<br>";
echo "Встречается K: " . strlen($k). "<br>";
echo "Встречается T: " . strlen($t). "<br>";
?>
<h2>Задание 6</h2>
<p>Дана строка. Сделайте функцию, которая принимает параметром эту строку и возвращает новую строку, в которой удалены лишние пробелы из исходной строки если они есть. (пробелы в начале и конце строки, а также повторяющиеся пробелы внутри).</p>
<p>Исходная  :  Hello        World   this   is   PHP    </p>
<?php
function cleanSpaces($str) {
    $len = strlen($str);
    $start = 0;
    while ($start < $len && $str[$start] === ' ') {
        $start++;
    }
    $end = $len - 1;
    while ($end >= 0 && $str[$end] === ' ') {
        $end--;
    }
    $result = "";
    $prevWasSpace = false;

    for ($i = $start; $i <= $end; $i++) {
        if ($str[$i] === ' ') {
            if (!$prevWasSpace) {
                $result .= ' ';
                $prevWasSpace = true;
            }
        } else {
            $result .= $str[$i];
            $prevWasSpace = false;
        }
    }
    return $result;
}
$t = '   Hello              World   this   is   PHP   ';
echo "Результат : " . cleanSpaces($t);
?><h2>Задание 7</h2>
<p>Дана строка, содержащая текст. Найти длину самого короткого слова и самого длинного слова.</p>
<?php
$str6 = "akula sait tort kniga";
$len = strlen($str6);
$currentWord = '';
$minLen = 0;
$maxLen = 0;
$firstWordFound = false;  

for ($i = 0; $i < $len; $i++) {
    if ($str6[$i] !== ' ') {
        $currentWord .= $str6[$i];
    } else {
        if ($currentWord !== '') {
            $wLen = strlen($currentWord);
            if (!$firstWordFound) {
                $minLen = $wLen;
                $maxLen = $wLen;
                $firstWordFound = true;
            } else {
                if ($wLen < $minLen) {
                    $minLen = $wLen;
                }
                if ($wLen > $maxLen) {
                    $maxLen = $wLen;
                }
            }
            $currentWord = '';
        }
    }
}
if (!$firstWordFound) {
    $minLen = 0;
    $maxLen = 0;
}
echo "Длина самого короткого слова: $minLen <br>";
echo "Длина самого длинного слова: $maxLen";
?><h2>Задание 8</h2>
<p>Дана строка. Подсчитать самую длинную последовательность подряд идущих букв а.</p>
<?php

?>


