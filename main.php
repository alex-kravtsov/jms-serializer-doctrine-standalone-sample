<?php

require_once __DIR__ . "/init.inc.php";

$jsonData = <<<EOD
{
    "title": "Nokia",
    "id": "1",
    "products": [
        {
            "title": "Nokia 130 dual sim - black",
            "description": "Form: bar; Business Features: Email"
        },
        {
            "title": "Nokia 215 dual sim - white",
            "description": "GSM enabled; GPRS enabled"
        },
        {
            "title": "Nokia 225 - black",
            "description": "Music player; Video player"
        }
    ]
}
EOD;

$serializer = JMS\Serializer\SerializerBuilder::create()
    ->addMetadataDir(__DIR__ . "/src")
    ->build();

$category = $serializer->deserialize($jsonData, 'Category', 'json');
$products = $category->getProducts();
foreach($products as $product) $product->setCategory($category);

$entityManager->persist($category);
$entityManager->flush();



// TEST 2
$data = [
    'title' => 'Test Product',
    'description' => '...',
    'category' => [
        'id' => $category->getId()
    ]
];
$jsonData = json_encode($data);
$product = $serializer->deserialize($jsonData, 'Product', 'json');

// var_dump($product);
// in this case category object should be loaded, that is the problem
// it works if we set
// $product->setCategory($category);

$entityManager->persist($product);
$entityManager->flush();
