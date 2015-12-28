<?php

require_once __DIR__ . "/init.inc.php";

$serializer = JMS\Serializer\SerializerBuilder::create()
    ->addMetadataDir(__DIR__ . "/src")
    ->build();

$data = [
    'title' => 'Test Product 2',
    'description' => '...',
    'category' => [
        'id' => '1',
    ],
];
$jsonData = json_encode($data);
$product = $serializer->deserialize($jsonData, 'Product', 'json');

// in this case category object should be loaded, that is the problem
// it works if we set
// $product->setCategory($category);

// Solution:
$product = $entityManager->merge($product);

$entityManager->persist($product);
$entityManager->flush();
