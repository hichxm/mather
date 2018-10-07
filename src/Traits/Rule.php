<?php


namespace Hichxm\Mather\Traits;


use Hichxm\Mather\Classes\Rules\PythagorasRule;

/**
 * Trait Rule
 * @package Hichxm\Mather\Traits
 */
trait Rule
{

    /**
     * @param float|null $AdjacentOrNull
     * @param float|null $HypotenuseOrNull
     * @param float|null $OppositeOrNull
     * @return PythagorasRule
     */
    static public function PythagorasRule(?float $AdjacentOrNull, ?float $HypotenuseOrNull, ?float $OppositeOrNull): PythagorasRule
    {
        return new PythagorasRule($AdjacentOrNull, $HypotenuseOrNull, $OppositeOrNull);
    }

}