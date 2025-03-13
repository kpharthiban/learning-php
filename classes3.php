<?php

// Encapsulation using visibility of data

class BankAccount {
    private float $balance = 0;

    // method to retrieve balance
    public function getBalance(): float {
        return $this->balance;
    }

    public function deposit(float $amount): mixed {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this->balance;
    }

    public function withdraw(float $amount): bool {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

$account = new BankAccount();
var_dump(
    $account->deposit(1000),
    $account->withdraw(500),
    $account->getBalance()
);