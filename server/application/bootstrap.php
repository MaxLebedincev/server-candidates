<?php

/* подключаем файлы ядра */
require_once 'core/controller.php';
require_once 'core/model.php';
//require_once 'core/view.php';

/* подключаем маршрутизатор и запускаем его на выполнение */
require_once 'core/route.php';
Route::start();
?>
