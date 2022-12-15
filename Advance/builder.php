<?php

class Contact {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;

    public function __construct(string $name, $surname, $email, $phone, $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    public function getPhone()
//    {
//        return $this->phone;
//    }
//
//    public function getAddress()
//    {
//        return $this->address;
//    }

}

interface BuilderInterface
{
    public function setName($name);
    public function setSurname($surname);
    public function setEmail($email);
    public function setPhone($phone);
    public function setAddress($address);
    public function build();
}

class ContactBuilder implements BuilderInterface
{
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $address;

    public function setName($name)
    {
         $this->name = $name;
         return $this;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setAddress($address)
    {
       $this->address = $address;
       return $this;
    }

    public function build(): Contact
    {
        return new Contact($this->name, $this->surname, $this->email, $this->phone, $this->address);

    }
}


$contact = new ContactBuilder();
$newContact = $contact->setPhone('000-555-000')
    ->setName("John")
    ->setSurname("Surname")
    ->setEmail("john@email.com")
    ->setAddress("Some address")
    ->build();
var_dump($newContact);

