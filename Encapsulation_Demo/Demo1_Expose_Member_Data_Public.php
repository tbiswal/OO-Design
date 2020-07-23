<?php

class Car
{

    public $tank;

    // Add liters of fuel to the tank when we fill it.
    public function fill($liters)
    {
        $this->tank += $liters;

        return $this;
    }

    // Subtract liters of fuel from the tank as we ride the car.
    public function ride($miles)
    {
        $liters     = $miles / 12;
        $this->tank -= ($liters);

        return $this->tank;
    }
}

// Create a new object from the Car class.
$bmw = new Car();
 $bmw->tank = -40;

// Add 10 gallons of fuel, then ride 40 miles,
// and get the number of gallons in the tank.
$tank = $bmw->fill(10)->ride(60);

// Print the results to the screen.
echo "The fuel left in the tank: ".$tank." liters.";