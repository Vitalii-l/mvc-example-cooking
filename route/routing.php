<?php

/* 
 * проверка URL адреса и перенаправление в
 * соответствубщую функцию контроллера:
 * start_site, news, contact, error
 */
$host = explode('?', $_SERVER['REQUEST_URI'])[0];

// посчитаем символы /, т.е. сколько вложений от корня
$num = substr_count($host, '/');
$way = explode('/', $host)[$num];

if ($way == '' || $way == 'index.php') {
    $response = Controller::StartSite();
}
elseif ($way == 'books') {
    $response = Controller::BookList();
}
elseif ($way == 'book') {
    if (isset($_GET['title'])){
        $title = $_GET['title'];
    }
    $response = Controller::BookOne($title);
}
else {
    // функция уонтроллера - загрузка файла ошибок
    $response = Controller::error404();
}