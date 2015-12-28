<?php

require_once __DIR__ . "/vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation', 
    __DIR__ . "/vendor/jms/serializer/src");

$isDevMode = true;
$conn = array(
    'driver'=>'mysqli',
    'host'=>'localhost',
    'user'=>'test',
    'password'=>'test',
    'dbname'=>'test',
    'charset'=>'UTF-8',
);

$config = Setup::CreateAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode, null, null, false);
$entityManager = EntityManager::create($conn, $config);
