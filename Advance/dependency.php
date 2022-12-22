<?php

interface DBInfoInterface
{
    public function getData();
}


class Mysql implements DBInfoInterface
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(DBInfoInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    function getData(): string
    {
        return $this->adapter->getData();
    }
}
