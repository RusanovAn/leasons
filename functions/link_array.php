<?php
include 'functions.php';

/*Передача по ссылке*/
$empty_array=[];
userData($empty_array);
var_dump($empty_array);
echo '<br>';

/*Вывод провайдера*/
$providers=
    [
        'provider1'=>'GMAIL',
        'provider2'=>'MAILRU',
        'provider3'=>'YANDEX',
        'provider4'=>'',
        'provider5'=>'abracadabra',
    ];
foreach ($providers as $emailProvider) {
    mailProvider($emailProvider);
}






