<?php

namespace Fabulous\Banking;
use Fabulous\Banking\Account;
use Fabulous\Banking\BankDatabase;

/**
 * Withdrawal transaction.
 *
 */
class DebitAccount extends Transaction
{
    private float $_amount;

    /**
     * This constructor for Withdrawal
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
            ->debit($this->_amount);
    }
}