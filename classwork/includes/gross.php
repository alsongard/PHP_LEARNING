<?php
    function getGross($inputAmount, $inputYears)
    {
        if ($inputYears === 1)
        {
            $rate = 0;
        }
        else if ($inputYears === 2)
        {
            $rate = 0.2;
        }
        else if ($inputYears === 3)
        {
            $rate = 0.3;
        }
        else if ($inputYears === 5)
        {
            $rate = 0.5;
        }
        else if ($inputYears > 5)
        {
            $rate = 0.8;
        }
        $profit = $rate * $inputAmount;
        $totalAmount = $inputAmount + $profit;

        $myArray = [$profit, $totalAmount];
        return $myArray;
    };