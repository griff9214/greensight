<?php

use App\FormData;
use App\FormValidator\FormValidator;
use App\UserRepository\ArrayUserRepository;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once "vendor/autoload.php";

$usersArray = require_once "users.php";
$repo = new ArrayUserRepository($usersArray);
$logger = new Logger('logger');
$logger->pushHandler(new StreamHandler('logs/app.log', Logger::DEBUG));


array_map("trim", $_POST);
$logger->info("Received user data from front", [$_POST]);

/**
 * @var string $name
 * @var string $secondName
 * @var string $email
 * @var string $password
 * @var string $passwordConfirmation
 */
extract($_POST);
$form = new FormData($name, $secondName, $email, $password, $passwordConfirmation);

$validator = new FormValidator($form);
$validateResult = $validator->validate();


if ($validateResult) {
    $logger->info("Validation passed with data: ", [$_POST]);
    $user = $repo->findByName($form->getName());
    $logger->info("User " . (!empty($user) ? "" : "not") . "found", [$user ?? null]);
} else {
    $logger->warning($validator->getError());
}

$responseData = [
    "validateResult" => $validateResult,
    "validateError" => $validator->getError(),
    "userFound" => !empty($user),
    "user" => $user ?? null,
];

$logger->info("Response to front:", [$responseData]);

echo json_encode($responseData);
