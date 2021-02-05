<?php
class Area
{
    const pi = 3.14;

    public function circle($radius)
    {
        return self::pi * ($radius * $radius);
    }
}


$circle = new Area();

echo $circle->circle(5);
