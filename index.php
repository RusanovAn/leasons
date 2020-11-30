<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>HTML5</title>
</head>
<body>
<h1>Тестовый заголовок H1</h1>
<div>
<h2>Списки</h2>
    <ol>
        <li>Текст 1</li>
        <li>Текст 2</li>
        <li>Текст 3</li>
        <li>Текст 4</li>
    </ol>
    <ul>
        <li>Текст 1</li>
        <li>Текст 2</li>
        <li>Текст 3</li>
        <li>Текст 4</li>
    </ul>
</div>
<div>
    <h2>Форма</h2>
    <form>
        <input type="text" placeholder="Тест плейсхолдера">
        <div>
            <label><input type="radio">Ratio</label>
        </div>
        <div><input type="button" value="Кнопка"></div>
    </form>
</div>
<div>
    <h3>Заголовок H3 блока текста</h3>
    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
        <span><b>Lorem Ipsum</b></span> является стандартной "рыбой" для текстов на латинице с начала XVI века.
        В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов,
        используя <a href="https://google.com">Lorem Ipsum</a> для распечатки образцов.
        Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
        Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и,
        в более недавнее время, программы электронной вёрстки типа Aldus PageMaker,
        в шаблонах которых используется Lorem Ipsum.</p>
</div>

<?php

$res=file_get_contents('https://maps.googleapis.com/maps/api/directions/json?origin=Chicago,IL&destination=Los+Angeles,CA&key=AIzaSyAi1U1z4eonSUIfR077tGDBinU0FRJKb_U');
print_r(json_decode($res));
?>
</body>
</html>