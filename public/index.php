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

$check = new \app\algorithms\IterVsForeach();
$check->checkTime();







//var_dump(microtime (true) - $t1);
//var_dump($dtFreach2);

