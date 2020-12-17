<?php

function userData(array &$array)
{
    $array['user']='Petya';
    $array['age']='28';

}

function mailProvider($emailProvider)
{
    if (isset($emailProvider)) {
        $emailProvider=trim($emailProvider);
        switch ($emailProvider) {
            case 'GMAIL':
                echo 'Я GMAIL <br>';
                break;
            case 'MAILRU':
                echo 'Я MAILRU<br>';
                break;
            case 'YANDEX':
                echo 'Я YANDEX <br>';
                break;
            case '':
                echo 'Поле Провайдер не заполнено  <br>';
                break;
            default:
                echo "Провайдер {$emailProvider} не поддерживается <br>";
        }
    } else {
        echo 'Поле Провайдер не существует <br>';
    }
}