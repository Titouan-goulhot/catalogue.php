<?php


class article

{
    private $id;
    private $name;
    private $description;
    private $price;
    private $picture;
    private $weight;
    private $quantity;
    private $available;

    public function __construct($id, $name, $description, $price, $picture, $weight, $quantity, $available)
    {

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->picture = $picture;
        $this->weight = $weight;
        $this->quantity = $quantity;
        $this->available = $available;
    }
    public function getid()
    {
        return $this->id;
    }

    public function getname()
    {
        return $this->name;
    }
    public function getdescription()
    {
        return $this->description;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function getpicture()
    {
        return $this->picture;
    }

    public function getweight()
    {
        return $this->weight;
    }

    public function getquantity()
    {
        return $this->quantity;
    }
    public function getavailable()
    {
        return $this->available;
    }
}
