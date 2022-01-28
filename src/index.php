<?php
require __DIR__ . '/../vendor/autoload.php';


use Discord\Discord;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$token = $_ENV["TOKEN"];


$discord = new Discord([
    'token' => 'OTM2NTAwNDc5ODcyMDkwMTQy.YfOGCQ.2mBJewzeMnpoMWvNfs8AwjnVuvk',
]);

$discord->run();

// $discord->on('ready', function ($discord) {
//     echo "Bot is ready!", PHP_EOL;

//     // Listen for messages.
//     $discord->on('message', function ($message, $discord) {
//         echo "{$message->author->username}: {$message->content}", PHP_EOL;
//     });
// });
