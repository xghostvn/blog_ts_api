<?php

namespace App\Services\AbtractFactoryPattern;

abstract class SolutionSeoFactory
{
    abstract function traffic() : AbstractTraffic;


    abstract function review() : AbstractReview;

}
