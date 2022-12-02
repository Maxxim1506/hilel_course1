<?php

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    private function setBlue(int $blue)
    {
        if ($blue < 0 || $blue > 255) {
            throw new \Exception("invalid");
        }
        $this->blue = $blue;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    private function setGreen(int $green): void
    {
        if ($green < 0 || $green > 255) {
            throw new \Exception("invalid");
        }
        $this->green = $green;
    }

    public function getRed(): int
    {
        return $this->red;
    }


    private function setRed(int $red): void
    {
        if ($red < 0 || $red > 255) {
            throw new \Exception("invalid");
        }
        $this->red = $red;
    }

    public function equals(Color $colorOne, Color $colorTwo): bool
    {
        return $colorOne == $colorTwo;
    }

    public static function randomColor(): Color
    {
        return new Color(random_int(0, 255), random_int(0, 255), random_int(0, 255));
    }

    public function mix(Color $color1): Color
    {
        $mixRed = ($color1->getRed() + $this->getRed())/2;
        $mixBlue = ($color1->getBlue() + $this->getBlue())/2;
        $mixGreen = ($color1->getGreen() + $this->getGreen())/2;
        return new Color($mixRed, $mixGreen, $mixBlue);
    }
}