<?php
require_once('./vendor/autoload.php');


use Discord\Discord;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$token = $_ENV["TOKEN"];


$discord = new Discord([
    'token' => 'OTM2NTAwNDc5ODcyMDkwMTQy.YfOGCQ.2mBJewzeMnpoMWvNfs8AwjnVuvk',
]);

$discord->run();
