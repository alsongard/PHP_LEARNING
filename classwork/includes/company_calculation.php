<?php
    function getCompanyCalculation($user, $rate, $hours)
    {
        $basicSalary = $rate * $hours;
        if ($basicSalary > 50000)
        {
            $result = $basicSalary * 0.2;
        }
        else if ($basicSalary >= 20000 & $basicSalary <= 50000)
        {
            $result = $basicSalary * 0.1;
        }
        else
        {
            $result = 0;
        }
        $tax = $result;
        $net_pay = $basicSalary - $tax;
        $myArray = [$user, $basicSalary,  $tax, $net_pay];
        return $myArray;
    };


