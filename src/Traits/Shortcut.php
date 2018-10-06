<?php


namespace Hichxm\Mather\Traits;


/**
 * Trait Shortcut
 * @package Hichxm\Mather\Traits
 */
trait Shortcut
{

    /**
     * @see Operation::total()
     * @param float|int ...$numbers
     * @return float|int
     */
    static public function sum(...$numbers)
    {
        return Operation::total(...$numbers);
    }

    /**
     * @see Operation::sub()
     * @param float|int ...$numbers
     * @return float|int
     */
    static public function sub(...$numbers)
    {
        return Operation::subtract(...$numbers);
    }

    /**
     * @see Operation::multiply()
     * @param float|int ...$numbers
     * @return float|int
     */
    static public function mul(...$numbers)
    {
        return Operation::multiply(...$numbers);
    }

    /**
     * @see Operation::divide()
     * @param float|int $a
     * @param float|int $b
     * @return float|int
     * @throws \Hichxm\Mather\Exceptions\DivisionByZeroException
     */
    static public function div($a, $b)
    {
        return Operation::divide($a, $b);
    }

}