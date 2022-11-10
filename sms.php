<?php

require __DIR__ . '/vendor/autoload.php';

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
->immutable()
->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__);
$dotenv->load();


$client = new \GuzzleHttp\Client();
$response = $client->request('POST', getenv('MOVIDER_URL_SMS'), [
    'headers' => [
        'accept' => 'application/json',
        'content-type' => 'application/x-www-form-urlencoded',
    ],
    'form_params' => [
        'api_key' => getenv('MOVIDER_KEY'),
        'api_secret' => getenv('MOVIDER_SECRET'),
        'from' => getenv('MOVIDER_FROM'),
        'to' => '+639356522762',
        'text' => 'HELLO GOOD PM, this is example message',
    ]
]);

$data = json_decode($response->getBody());
if(isset($data->remaining_balance)){
    echo json_encode($data);
}
echo "false";