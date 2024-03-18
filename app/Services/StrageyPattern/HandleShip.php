<?php

namespace App\Services\StrageyPattern;

class HandleShip
{

    static $a = 1;

    protected  $c = 2;
    protected  $shipStrategy;
    public function __construct(Shipping $shipStrategy)
    {
        $this->shipStrategy = $shipStrategy;
    }

    public function a()
    {
        return self::$a;
    }

    public  function b()
    {
       $a = self::$c;
    }
}
