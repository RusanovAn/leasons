<?php
include 'functions.php';
include 'data.php';

/*Передача по ссылке*/
$empty_array=[];
userData($empty_array);
var_dump($empty_array);
echo '<br>';

/*Вывод провайдера*/
foreach ($providers as $k=>$emailProvider) {
    mailProvider($emailProvider);
}






