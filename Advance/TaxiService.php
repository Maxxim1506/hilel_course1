<?php

class TaxiServiceFactory
{
    protected $car;
    public function OrderCreation($service)
    {
        if ($service === 'Econom'){
            return $this->car = new Econom();
        }elseif ($service === 'Standart'){
            return $this->car = new Standart();
        }elseif ($service === 'Lux'){
            return $this->car = new Lux();
        }
    }
}

class TaxiOrder
{
    protected $taxiOrder;
    protected $car;

    public function __construct()
    {
        $this->car = new TaxiServiceFactory();
    }
    public function Order($service): void
    {

        $car = $this->car->OrderCreation($service);
        $this->taxiOrder = $car->getModel() . ' Price ' . $car->getPrice();
    }

    public function getTaxiOrder()
    {
        return $this->taxiOrder;
    }
}

interface CarInfoInterface
{
    public function getModel();
    public function getPrice();
}

class Econom implements CarInfoInterface
{

   private string $model;
   private int $price;

   public function __construct(string $model = 'Daewoo', int $price = 100)
   {
       $this->model = $model;
       $this->price = $price;
   }
   public function getModel(): string
   {
        return $this->model;
   }

    public function getPrice(): int
    {
        return $this->price;
    }
}

class Standart implements CarInfoInterface
{

    private string $model;
    private int $price;

    public function __construct(string $model = 'toyota', int $price = 150)
    {
        $this->model = $model;
        $this->price = $price;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}

class Lux implements CarInfoInterface
{
    private string $model;
    private int $price;

    public function __construct(string $model = 'Tesla', int $price = 200)
    {
        $this->model = $model;
        $this->price = $price;
    }
    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): int
    {
        return $this->price;
    }


}

$carOrder = new TaxiOrder();

$carOrder->Order('Econom');
print_r($carOrder->getTaxiOrder());




