<?php

session_start();
ob_start();

use Absolute\Auth;
use Absolute\Registry;
use Absolute\Router;

include '../lib/SplClassLoader.php';

$classLoader = new SplClassLoader('Absolute', '../lib');
$classLoader->register();

$classLoader = new SplClassLoader('App', '..');
$classLoader->register();

$bootstrap = new \App\Bootstrap();
