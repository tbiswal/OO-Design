<?php

namespace Acme;

// Flip the dependencies as we have a common interface
class AreaCalculator
{
    public function calculate($shapes)
    {
        foreach ($shapes as $shape) 
        {
            // We know 100% that area() will be availble in the shape class
            $area[] = $shape->area();

            // Now when the boss says to calculate shape of new shape
            // we no need to disturn this class rather we will create a new
            // shape class and extend the behavior

        }

        return array_sum($area);
    }
}
