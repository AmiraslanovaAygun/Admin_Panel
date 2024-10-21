<?php

declare(strict_types=1);


function getTransactions(string $fileName): array
{
    if (!file_exists($fileName)) {
        trigger_error("File " . $fileName . " not found", E_USER_ERROR);
    }

    $file = fopen($fileName, "r");
    $transactions = [];
    fgetcsv($file);
    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractTransactions($transaction);
    }
    return $transactions;
    fclose($file);
}

function extractTransactions(array $transaction): array
{
    [$userName,$userSurname,$userEmail, $password,$imagePath] = $transaction;

    return [
        'userName' => $userName,
        'userSurname' => $userSurname,
        'userEmail' => $userEmail,
        'password' => $password,
        'imagePath' =>  $imagePath,
    ];
}
