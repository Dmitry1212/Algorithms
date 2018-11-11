<?php

include $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
include ROOT_DIR . "services/Autoloader.php";

spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);

/**
 * ДЗ1 Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.
 */
//$explorer = new app\algorithms\Explorer();
//echo $explorer->getDirContent(dirname($_SERVER['DOCUMENT_ROOT']) );


/**
 * Попробовать определить, на каком объеме данных применение итераторов становится выгоднее,
 * чем использование чистого foreach.
 */

//$check = new \app\algorithms\IterVsForeach();
//$check->checkTime();


/**
 * 3.*Создать PHP-демон, который принимает от пользователя сообщения. Создать отдельный интерфейс с кнопкой,
 * возвращающей самое старое сообщение на экран и удаляющее его. Базы данных, файлы и иные хранилища не использовать.
 */


/**
 * ДЗ2
 * 3. *Реализовать функционал сортировки слиянием.
 */

$sort = new \app\algorithms\SortSliv();
$arr = [1,5,8,7,2,5,4,5,3,9];
var_dump($arr);
$arr = $sort->sortSliv($arr);
var_dump($arr);



