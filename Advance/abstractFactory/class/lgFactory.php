<?php
namespace Advance\abstractFactory\class;
use Advance\abstractFactory\interface\tvFactoryInterface;
use Advance\abstractFactory\interface\tvsetInterface;

class lgFactory implements tvFactoryInterface
{
    public function __construct()
    {
        echo 'LG ';
    }
    public function makeTV(): TVsetInterface
    {
        return new lcdTV();
    }
}
