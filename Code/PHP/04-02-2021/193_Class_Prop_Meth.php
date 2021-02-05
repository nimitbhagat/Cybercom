<?php
class BankAccount
{
    protected $balance = 3500;

    public function displayBalance()
    {
        return $this->balance;
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return $this->displayBalance();
        } else {
            return "Not Enough Balance";
        }
    }
}

$Nimit = new BankAccount();

echo $Nimit->displayBalance();
echo "<br>" . $Nimit->withdraw(10);
echo "<br>" . $Nimit->withdraw(10);
