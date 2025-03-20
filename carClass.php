<?php
class Car
{
    var $brand;
    var $model;
    var $year;
    var $milage;
    var $price;
    
    function __construct($brand, $model, $year,$milage,$price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->milage=$milage;
        $this->price=$price;
    }
}
?>