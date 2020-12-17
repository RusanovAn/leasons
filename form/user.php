<?php
session_start();

if (isset($_GET['sess']) && $_GET['sess']=='logout'){
    session_destroy();
    header("location: user.php");
}

if (isset($_POST['login']) && isset($_POST['pass'])) {
    if (!empty($_POST['login']) && !empty($_POST['pass'])) {
        $_SESSION['login']=strip_tags($_POST['login']);
        $_SESSION['pass']=strip_tags($_POST['pass']);
        header("location: user.php");
    }
}

$isAutorise=isset($_SESSION['login']) && isset($_SESSION['pass']);

if ($isAutorise) {
    include 'user_data.php';
} else {
    include 'form.php';
}

