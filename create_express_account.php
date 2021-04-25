<?php

require "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

$key =  getenv("BASE_PATH") . "test";

var_dump($key);