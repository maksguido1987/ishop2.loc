<?php

//константа с 1 режим разработки (показывает ошибки), с 0 режим продакшена (ошибки в лог файл)
define("DEBUG", 1);

// константа, указывающая на корень проекта
define("ROOT", dirname(__DIR__));

// константа, указывающая на папку public/app/core/cache
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');

// шаблон сайта по умолчанию
define("LAYOUT", 'default');
