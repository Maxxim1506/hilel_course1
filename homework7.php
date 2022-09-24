<?php

abstract class Vehicle {

public int $wheelAmount;	

public string $color;

public function getWheelAmount(): int
{
	return $this->wheelAmount;
}
public function setWheelAmount(int $amount): void
{
	$this->wheelAmount = $amount;
}
public function getColor(): string
{
	return $this->color;
}
public function setColor(string $color): void
{
	$this->color = $color;
}

abstract function math(int $number1, $number2): int

}

class Car extends Vehicle {

	public int $speed;
public function getSpeed(): int 
{
	return $this->speed;
}
public function setSpeed(int $speed): void
{
	$this->speed = $speed;
}
public function math(int $number1, $number2): int
{
	return $number1 + $number2 + $this->speed - $this->wheelAmount;
}
}
	
}

class Truck extends Vehicle {

	public int $length;
public function getLength(): int
{
	return $this->length;
}
public function setLength(int $length): void
{
	$this->length = $length;
}
public function math(int $number1, $number2): int
{
	return pow($number1, $number2) + $this->length + $this->wheelAmount;
}

}

final class Moto extends Vehicle {

	public int $weight;
public function getWeight(): int
{
	return $this->weight;
}
public function setWeight(int $weight): void
{
	$this->weight = $weight;
}
public function math(int $number1, $number2): int
{
 return ($number1 / $number2) * $this->weight + $this->wheelAmount;
}
}

class Toyota extends Car {

	public int $toyotaSpeed;
public function getToyotaSpeed():int
{
	return $this->toyotaSpeed;
}
public function setToyotaSpeed(int $speed):void
{
	$this->toyotaSpeed = $speed;
}
public function math(int $number1, $number2): int
{
	return $number1 + $number2 + $this->speed - $this->wheelAmount * $this->toyotaSpeed;
}
}

class Bmw extends Car {

	public int $bmwSpeed;

public function getBmwSpeed(): int
{
	return $this->bmwSpeed;
}
public function setBmwSpeed(int $speed): void
{
	$this->bmwSpeed = $speed;
}
public function math(int $number1, $number2): int
{
	return $number1 + $number2 + $this->speed - $this->wheelAmount * $this->bmwSpeed;
}
}

class Volvo extends Truck {

	public int $volvoLength;

public function getVolvoLength(): int
{
	return $this->volvoLength;
}
public function setVolvoLength(int $length): void
{
	$this->volvoLength = $length;
}
public function math(int $number1, $number2): int
{
	return $number1 + $number2 + $this->speed - $this->wheelAmount * $this->volvoLength;
}
}

class Mercedes extends Truck {

	public int $mercedesLength;

public function getMercedesLength(): int
{
	return $this->mercedesLength;
}
public function setMercedesLength(int $length): void
{
	$this->mercedesLength = $length;
}
public function math(int $number1, $number2): int
{
	return $number1 + $number2 + $this->speed - $this->wheelAmount * $this->mercedesLength;
}
}

$obj = new Mercedes();
$obj->setMercedesLength(4);
$obj->setColor("blue");
$obj->setMercedesAmountWheels(6);
var_dump($obj);



