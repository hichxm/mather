<?php


namespace Hichxm\Mather\Traits;


/**
 * Trait Constant
 * @package Hichxm\Mather\Traits
 */
trait Constant
{

    /**
     * Returns the value of PI
     * @return float
     */
    static public function PI(): float
    {
        return M_PI;
    }

    /**
     * Returns the value of PLANCK constant (J/s)
     * @return float
     */
    static public function PLANCK(): float
    {
        return 6.62607004 * pow(10, -34);
    }

    /**
     * Returns the value of LIGHT SPEED constant (m/s)
     * @return int
     */
    static public function LIGHT_SPEED(): int
    {
        return 299792458;
    }

    /**
     * Returns the value of MEISSEL MERTENS constant
     * @return float
     */
    static public function MEISSEL_MERTENS(): float
    {
        return 0.261497212847642783755426838608695859;
    }

}