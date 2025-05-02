<?php
class Car
{
    var $id;
    var $sold;
    var $brand;
    var $model;
    var $body;
    var $exteriorColor;
    var $interiorColor;
    var $driveType;
    var $transmission;
    var $price;
    var $buildYear;
    var $milage;
    var $topSpeed;
    var $acceleration;
    var $liters;
    var $shape;
    var $cylinders;
    var $aspiration;
    var $eMotor;
    var $hp;
    var $torque;
    var $displacement;
    var $weight;
    var $width;
    var $length;
    var $height;
    var $wheelBase;
    var $description;
    function __construct(
        $id,
        $sold,
        $brand,
        $model,
        $body,
        $exteriorColor,
        $interiorColor,
        $driveType,
        $transmission,
        $price,
        $buildYear,
        $milage,
        $topSpeed,
        $acceleration,
        $liters,
        $shape,
        $cylinders,
        $aspiration,
        $eMotor,
        $hp,
        $torque,
        $displacement,
        $weight,
        $width,
        $length,
        $height,
        $wheelBase,
        $description,
    ) {
        $this->id=$id;
        $this->sold=$sold;
        $this->brand = $brand;
        $this->model = $model;
        $this->body = $body;
        $this->exteriorColor = $exteriorColor;
        $this->interiorColor = $interiorColor;
        $this->driveType = $driveType;
        $this->transmission = $transmission;
        $this->price = $price;
        $this->buildYear = $buildYear;
        $this->milage = $milage;
        $this->topSpeed = $topSpeed;
        $this->acceleration = $acceleration;
        $this->liters = $liters;
        $this->shape = $shape;
        $this->cylinders = $cylinders;
        $this->aspiration = $aspiration;
        $this->eMotor = $eMotor;
        $this->hp = $hp;
        $this->torque = $torque;
        $this->displacement = $displacement;
        $this->weight = $weight;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->wheelBase = $wheelBase;
        $this->description = $description;
    }
}
