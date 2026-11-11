<h1>Функция</h1>
<h2>Определение функции и ее вызовов</h2>
<?php
sayHello();
function sayHello(){
    echo '<p>Привет! </p>';
}
?><h2>Передача в функции пораметров</h2>
<?php
function sayHello1($name){
    echo '<p>Привет,$name! </p>';
}
sayHello1('Вася')
?>
<?php
function printfullName($fName,$lName){
    echo "$fName $lName";
}printfullName('Вася', 'Иванов')
?>
<h2>Функия с параметрами по умолчанию</h2>
<?php
function printUserI($fName,$lName, $role='user'){
    echo "<p> $fName, роль - $role </p?";
} printUserI('Коля','Петров','student')
?>