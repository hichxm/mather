<?php


namespace Hichxm\Mather\traits;


/**
 * Trait Shortcut
 * @package Hichxm\Mather\traits
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

}