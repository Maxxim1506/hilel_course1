<?php

interface Bird
{
    public function eat();

}

interface BirdFlyInterface
{
    public function fly();
}

interface BirdWalkInterface
{
    public function walk();
}

class Swallow implements BirdFlyInterface, Bird, BirdWalkInterface
{
    public function eat()
    {
        return true;
    }
    public function fly()
    {
        return true;
    }
    public function walk()
    {
        return true;
    }
}

class Ostrich implements Bird, BirdWalkInterface
{
    public function eat()
    {
        return true;
    }
    public function walk()
    {
        return true;
    }
}