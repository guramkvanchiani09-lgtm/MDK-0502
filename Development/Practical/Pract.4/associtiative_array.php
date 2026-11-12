<h1>Асоциативные массивы</h1>
<h2>Задание 1</h2>
<p>Создайте ассоциативный массив, ключами которого являются английские слова, а значениями - русские (10 пар).

Вывести его на экран в виде:

monday - понедельник

friday - пятница</p>
<?php
$dictionary = ['monday' => 'понедельник','tuesday' => 'вторник','wednesday' => 'среда','thursday' => 'четверг','friday' => 'пятница','saturday' => 'суббота','sunday' => 'воскресенье','apple' => 'яблоко','cat' => 'кот','dog' => 'собака'];
foreach ($dictionary as $eng => $rus) {
    echo $eng . " - " . $rus . "<br>";
}
?><h2>Задание 2</h2>
<p>Дан массив предыдущего задания и русское слово для перевода.

Если в словаре есть заданное слово - вывести на экран его и его перевод. Если нет вывести его - строку 'В словаре нет такого слова'.

Например:

один - one

кракозябра - В словаре нет такого слова</p>
<?php
$w = 'monday';
$result = isset($dictionary[$w]) ? $dictionary[$w] : 'В словаре нет такого слова';
echo $w. " - " . $result;
?><h2>Задание 3</h2>
<p>Измените решение Задания 2 так, чтобы перевод работал в обе стороны и переводиться могли и русские и английские слова.</p>
<?php
$w= 'пятница'; // Проверяем русское слово
if (isset($dictionary[$w])) {
    echo $w. " - " . $dictionary[$w];
} elseif (in_array($w, $dictionary)) {
    $engKey = array_search($w, $dictionary);
    echo $w. " - " . $engKey;
} else {
    echo $w. " - В словаре нет такого слова";
}?><h2>Задание 4</h2>
<p>Измените решение предыдущих заданий так, чтобы слово для перевода можно было вводить в форму.</p>
<?php
$dictionary = [
    'monday' => 'понедельник',
    'friday' => 'пятница',
    'cat' => 'кот'
];?>
<form method="POST">
    <input type="text" name="word" placeholder="Введите слово" required>
    <button type="submit">Перевести</button>
</form>
<?php
if (isset($_POST['word'])) {
    $word = mb_strtolower(trim($_POST['word'])); 
    $fullDictionary = array_merge($dictionary, array_flip($dictionary));
    $result = isset($fullDictionary[$word]) ? $fullDictionary[$word] : 'В словаре нет такого слова';
    echo "<b>Результат:</b> " . $word . " - " . $result;
}?><h2>Задание 5</h2>
<p>Дана строка. Посчитать каждый символ, сколько раз он встретился. Создать массив, где ключами являются буквы, а значениями - числа. Например, строка “banana” должна выдать массив:

'b' => 1

'a' => 3

'n' => 2</p>
<?php
$str = "banana";
$charCount = [];
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (isset($charCount[$char])) {
        $charCount[$char]++;
    } else {
        $charCount[$char] = 1;
    }
}
echo "Строка: '$str'<br>";
print_r($charCount);?>
<h2>Задание 6</h2>
<p>В массиве из задания 1 поменять ключи и значения.</p>
<?php
$flipped = array_flip($dictionary);
echo "Перевернутый массив:<br>";
echo "понедельник - " . $flipped['понедельник'] . "<br>";
echo "яблоко - " . $flipped['яблоко'] . "<br>";
?><h2>Задание 7</h2>
<p>Дан обычный массив (не ассоциативный) со словами. Сделать ассоциаитвный массив с ключами: длина слова => строка из слов.

Пример:

['3' => 'кот дом лес', '4' => 'слон мышь']</p>
<?php
echo "<h3>Задание 7</h3>";
$words = ['кот', 'дом', 'лес', 'слон', 'мышь'];
$result = []; 
foreach ($words as $word) {
    $length = mb_strlen($word); // Узнаем длину слова (mb_strlen для кириллицы)
    $result[$length] = ($result[$length] ?? '') . $word . ' ';
}
foreach ($result as $key => $value) {
    $result[$key] = trim($value);
}
echo "$result";?>