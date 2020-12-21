<?php

function userData(array &$array): void
{
    $array['user']='Petya';
    $array['age']='28';

}

function mailProvider(string $emailProvider): void
{
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

}