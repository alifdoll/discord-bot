<?php
require_once('./vendor/autoload.php');


use Discord\Discord;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$token = $_ENV["TOKEN"];


$discord = new Discord([
    'token' => $token,
]);

$discord->on('on', function($discord) {
	echo "Bot is ready";
	$discord->on('message', function ($message, $discord) {
		echo "Testing";
	});
});

$discord->run();
