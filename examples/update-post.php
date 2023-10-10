<?php

use Api\Client\ClientBuilder;
use Api\Client\Options;
use Api\Client\Sdk;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;

require_once __DIR__ . '/../vendor/autoload.php';


$clientBuilder = new ClientBuilder();
$clientBuilder->addPlugin(new HeaderDefaultsPlugin([
    'Accept' => 'application/json',
]));

$id = 4;
$options = new Options(
    [
        'client_builder' => $clientBuilder,
    ],
    [
        'id' => $id,
        'title' => 'foo',
        'body' => 'bar',
        'userId' => 1,
    ],
);

$sdk = new Sdk($options);

// Update Post
$response = $sdk->todos()->updatePost($id);
$sdk->dnd($response);