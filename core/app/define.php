<?php
define('THINK_PATH', __DIR__ . '/../thinkphp/');
define('APP_PATH', __DIR__ . '/../app/');
define('APP_NAME', 'cms');
define("RUNTIME_PATH",'../runtime/');
define('_PHP_FILE_',    rtrim($_SERVER['SCRIPT_NAME'],'/'));
if( strtoupper(APP_NAME) == strtoupper(basename(dirname(_PHP_FILE_))) ) define('__ROOT__',   ((dirname(dirname(_PHP_FILE_))=='/' || dirname(dirname(_PHP_FILE_))=='\\')?'':dirname(dirname(_PHP_FILE_))));
else define('__ROOT__',   (( dirname(_PHP_FILE_) )=='/' || dirname(_PHP_FILE_) =='\\')?'': dirname(_PHP_FILE_) );