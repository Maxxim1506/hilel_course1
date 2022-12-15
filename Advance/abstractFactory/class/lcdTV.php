<?php

namespace Advance\abstractFactory\class;
use Advance\abstractFactory\interface\TVsetInterface;

class lcdTV implements TVsetInterface
{
    public function getInfo(): string
    {
        return 'LCD TV';
    }
}