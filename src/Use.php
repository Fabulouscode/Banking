<?php

namespace Fabulous\Banking;
use Fabulous\Banking\AccountTransaction;

// Instantiate AccountTransaction class
$bankPackage = new AccountTransaction();

//Create Bank Account
$account = $bankPackage->createAccount('23456', '0.00');


$account->toArray();

//Credit Account
$creditAccount = $bankPackage->credit($account->getAccountNumber(), '2000.00');

// Debit Account
$debitAccunt = $patPayPackage->debit($account->getAccountNumber(), '100.00');

// Get Total Balance
$balance = $bankPackage->getTotalBalance($account->getAccountNumber());

// Transfer From one Account to another Account
$transferFromAccount = $bankPackage->transfer(
    $account->getAccountNumber(),
    $bankPackage->createAccount('12345', '30.00')->getTotalBalance(),
    '500.00'
);


