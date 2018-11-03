<?php

include $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
include ROOT_DIR . "algorithms/Explorer.php";
include ROOT_DIR . "algorithms/Renderer.php";
include ROOT_DIR . "algorithms/scriptTemplate.php";


$explorer = new app\algorithms\Explorer();

echo $explorer->getDirContent(dirname($_SERVER['DOCUMENT_ROOT']) );


