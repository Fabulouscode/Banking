<?php

namespace Fabulous\Banking;
use Fabulous\Banking\BankDatabase;

/**
 * Class credit transaction
 *
 */
class CreditAccount extends Transaction
{
    private float $_amount;

    /**
     * This constructor for Credit class
     *
     * @param int $accountNumber
     * @param float $amount
     * @param BankDatabase $bankDatabase
     */
    public function __construct(int $accountNumber, float $amount, BankDatabase $bankDatabase)
    {
        parent::__construct($accountNumber, $bankDatabase);
        $this->_amount = $amount;
    }

    /**
     * This method for execute transaction
     *
     * @return void
     */
    public function execute(): void
    {
        $this->_bankDatabase->getAccount($this->_accountNumber)
            ->credit($this->_amount);
    }
}