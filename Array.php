<?php
$name='Андрей';
$a = ['Привет', 'Мир!', 'Меня', 'зовут', $name];
echo implode(' ',$a);

$arr = [
    'dep1' => ['Kolya' => 1000, 'Oleg' => 700, 'Olya' => 1100],
    'dep2' => ['Nik' => 900, 'Jhon' => 800, 'Boss' => 1600],
];

foreach ($arr as $k=>$v) echo '<br>'.ucfirst($k).' Salary: '.array_sum($v);

echo '<br>';
$arr = [1, 2, 3, 4, 5, 6];
$arr2 = array_slice($arr,3);

print_r($arr2);
echo '<br>';
print_r(array_shift($arr));
echo '<br>';
print_r(array_pop($arr));
echo '<br>';
print_r($arr);


