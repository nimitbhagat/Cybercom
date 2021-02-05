<?php
class Details
{
    var $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}


$Nimit = new Details("Nimit Bhagat");

echo $Nimit->getName();
