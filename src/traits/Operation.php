<?php


namespace Hichxm\Mather\traits;


/**
 * Trait Operation
 * @package Hichxm\Mather\Operation
 */
trait Operation
{

    /**
     * Sum all the numbers between them
     *
     * @param float|int ...$numbers
     * @return float|int
     */
    static public function sum(...$numbers)
    {
        $value = null;

        foreach ($numbers as $number) {
            $value += $number;
        }

        return $value;
    }

    /**
     * Sum all the numbers between them
     *
     * @param float|int ...$numbers
     * @return float|int
     */
    static public function sub(...$numbers)
    {
        $value = array_shift($numbers);

        foreach ($numbers as $number) {
            $value -= $number;
        }

        return $value;
    }

    /**
     * Multiply the numbers between them
     *
     * @param float|int ...$numbers
     * @return float|int
     */
    static public function multiply(...$numbers)
    {
        $value = array_shift($numbers);

        foreach ($numbers as $number) {
            $value = $value * $number;
        }

        return $value;
    }

}