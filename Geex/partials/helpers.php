<?php

declare(strict_types=1);


function getTransactions(string $fileName): array
{
    if (!file_exists($fileName)) {
        trigger_error("File " . $fileName . " not found", E_USER_ERROR);
    }

    $file = fopen($fileName, "r");
    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractTransactions($transaction);
    }
    return $transactions;
    fclose($file);
}

function extractTransactions(array $transaction): array
{
    [$userEmail, $password] = $transaction;

    return [
        'userEmail' => $userEmail,
        'password' => $password,
    ];
}
