<?php

namespace Acme;

// Follow SRP
class AreaCalculator
{
    public function calculate($shapes)
    {
        //foreach ($squares as $square) {
            //$area[] = $square->width * $square->height;
        //}

        foreach ($shapes as $shape) 
        {
            if (is_a($shape, 'Square')) 
            {
                $area[] = $shape->width * $shape->height;
            }

            else
            {
                $area[] = $shape->radius * pi();
            }

            // Now your boss says calculate area of triangle
            // elseif(is_a($shape, 'Triangle'))
            // {
            //      Do you think we need to change the code everytime we 
            //      want to calculate area of the different shape?
            // }

            // So how we can extend the behavior by closing the modification?
        }


        return array_sum($area);
    }
}
