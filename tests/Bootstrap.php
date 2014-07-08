<?php

use Zend\ServiceManager\ServiceManager,
    Zend\Mvc\Service\ServiceManagerConfiguration;

chdir(dirname(__DIR__));

include __DIR__ . '/../init_autoloader.php';

$configuration = include 'config/application.config.php';
