<meta charset='utf-8'>
<?php
// Задание -> 2
// Найдите в документации функции для работы с датой и временем time () и mktime (), ознакомьтесь с возможностями, которые предоставляют эти функции. С использованием календарных функций выведите текущие дату и время в следующем формате: '10.07.2018 14:10'

// time — Возвращает текущую метку системного времени Unix
// mktime — Возвращает метку времени Unix для заданной даты

$date = date('d.m.Y ');
$clock = date(' h:m');

echo $date.$clock;

