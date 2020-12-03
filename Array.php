<?php
//Написать цикл который посчитает сумму в dept1 и в dept2. Вывести сумму dept1 + dept2.
$dept = [
    'dep1' => ['Kolya' => 1000, 'Oleg' => 700, 'Olya' => 1100],
    'dep2' => ['Nik' => 900, 'Jhon' => 800, 'Boss' => 1600],
];
$total=0;
foreach ($dept as $k=>$v) {
    echo '<br>'.ucfirst($k).' Salary: '.array_sum($v);
    $total+=array_sum($v);
}
echo  '<br> Total: '.$total.'<br>';

//Написать цикл который выводит цифры от 0 до 100 но обрывается на 50
for ($i=0;$i<=100;$i++){
    echo $i.' ';
    if ($i==50){
        break;
    }
}
//Написать функцию которая принимает массив $arr = [1,5,6,9,12] в цикле считает сумму и выдает результат числом. Вывести число на экран.

function arr($arr){
$sum=0;
    foreach ($arr as $k=>$v){
        if (is_scalar($v)){
            $sum+=$v;
        }
    }
return $sum;
}
$arr = [1,5,6,9,12];
echo '<br> сумма массива '.arr($arr);

//Написать функцию которая принимает массив и считает сумму его элементов. Написать другую функцию которая использует первую, которой на вход подается массив с подмассивами. (Пример c dept1, dept2)
$dept = [
    'dep1' => ['Kolya' => 1000, 'Oleg' => 700, 'Olya' => 1100],
    'dep2' => ['Nik' => 900, 'Jhon' => 800, 'Boss' => 1600],
];

function arr2 ($dept) {
    $total=0;
 foreach ($dept as $k=>$v){
     $total+=call_user_func('arr',$v);
 }
return $total;
}

echo '<br> Сумма dept: '.arr2($dept);
