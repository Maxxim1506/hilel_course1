<?php

namespace Advance\abstractFactory\class;
use Advance\abstractFactory\interface\TVsetInterface;

class ledTV implements TVsetInterface
{
    public function getInfo(): string
    {
        return 'LED TV';
    }
}