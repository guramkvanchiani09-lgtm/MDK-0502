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
$len2 = strlen($string);

for ($i = 0; $i < $len2; $i++) {
    if ($str3[$i] != " ") {
        $word .= $str3[$i];
    } else {
        if ($word !== "" && $word[0] == $word[$len2 - 1]) {
            echo $word . "<br>";
        }
        $word = "";
    }
}
if ($word !== "" && $word[0] == $word[$len2 - 1]) {
    echo $word . "<br>";
}?>
<h2>Задание 4</h2>
<p>Дана строка. Подсчитать, сколько различных символов встречается в ней. Вывести их на экран.</p>
<?php
$str4="It’s a pleasure to meet you.";
$word="";
$len3=strlen($str4);

?>