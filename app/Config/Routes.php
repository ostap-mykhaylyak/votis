<?php

use CodeIgniter\Router\RouteCollection;

$modulesPath = ROOTPATH . 'modules';

foreach (scandir($modulesPath) as $module) {
    if ($module === '.' || $module === '..') continue;

    $routeFile = $modulesPath . "/$module/Routes.php";

    if (file_exists($routeFile)) {
        require $routeFile;
    }
}
