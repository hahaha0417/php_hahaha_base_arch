<?php
//Insert in config folder as file name cli-config.php

// require_once "vendor/autoload.php";

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// https://gist.github.com/roggeo/3cd2f3ffc894f9fb2b9851952a76fe4d

// Create a simple "default" Doctrine ORM configuration for Annotations
$paths = [__DIR__ . "/../models"];
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);

// database configuration parameters
$conn = array(
    'driver'    => 'pdo_mysql',
    'host'      => 'localhost',
    'port'      => '3306',
    'user'      => 'hahaha',
    'password'  => 'hahaha',
    'dbname'    => 'table_tw',
    'charset'   => 'utf8mb4',
    'driverOptions' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ]
);

$entityManager = EntityManager::create($conn, $config);

return ConsoleRunner::createHelperSet($entityManager);

