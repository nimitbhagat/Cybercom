<?php
class BankAccount
{
    public $balance = 0;
    public $type = "";

    public function setType($type)
    {
        $this->type = $type;
    }

    public function __construct($initial)
    {
        $this->balance = $initial;
    }
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

    public function deposite($amount)
    {
        $this->balance += $amount;
        return $this->displayBalance();
    }
}

class SavingAccount extends BankAccount
{
    
}

$Nimit = new SavingAccount(5000);
$Vidhi = new SavingAccount(4000);

echo "Nimit's Account";
echo "<br>";
echo $Nimit->displayBalance();
echo "<br>" . $Nimit->withdraw(10);
echo "<br>" . $Nimit->deposite(1000);
echo "<br>" . $Nimit->setType('18-23');
echo "<br>" . $Nimit->type;


echo "<br>";
echo "Vidhi's Account";
echo "<br>";

echo $Vidhi->displayBalance();
echo "<br>" . $Vidhi->withdraw(10);
echo "<br>" . $Vidhi->deposite(500);
