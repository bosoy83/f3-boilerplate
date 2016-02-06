<?php

namespace FFMVC\App;

chdir(realpath(__DIR__ . '/../app'));

if (session_status() == PHP_SESSION_NONE) {
    ini_set('session.auto_start', 0);
}
require_once 'lib/autoload.php'; // composer autoloader
// @see https://github.com/vijinho/f3-boilerplate
require_once 'app.php';
Run();
