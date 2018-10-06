<?php


namespace Hichxm\Mather\traits;


use Hichxm\Mather\Exceptions\DivisionByZeroException;

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
    static public function total(...$numbers)
    {
        $value = array_shift($numbers);

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
    static public function subtract(...$numbers)
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

    /**
     * Divide the first term by the second
     *
     * @param float|int $a
     * @param float|int $b
     * @return float|int
     * @throws DivisionByZeroException
     */
    static public function divide($a, $b)
    {
        if ($b == 0) {
            throw new DivisionByZeroException();
        }

        return $a / $b;
    }

}