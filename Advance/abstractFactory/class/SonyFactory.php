<?php
namespace Advance\abstractFactory\class;
use Advance\abstractFactory\interface\tvFactoryInterface;
use Advance\abstractFactory\interface\tvsetInterface;

class SonyFactory implements tvFactoryInterface
{
    public function __construct()
    {
        echo 'Sony ';
    }

    public function makeTV(): TVsetInterface
    {
        return new ledTV();
    }
}