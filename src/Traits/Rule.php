<?php


namespace Hichxm\Mather\Traits;


use Hichxm\Mather\Classes\Rules\PythagorasRule;
use Hichxm\Mather\Classes\Rules\StefanRule;

/**
 * Trait Rule
 * @package Hichxm\Mather\Traits
 */
trait Rule
{

    /**
     * @see PythagorasRule::class
     * @param float|null $AdjacentOrNull
     * @param float|null $HypotenuseOrNull
     * @param float|null $OppositeOrNull
     * @return PythagorasRule
     */
    static public function PythagorasRule(?float $AdjacentOrNull, ?float $HypotenuseOrNull, ?float $OppositeOrNull): PythagorasRule
    {
        return new PythagorasRule($AdjacentOrNull, $HypotenuseOrNull, $OppositeOrNull);
    }

    /**
     * @see StefanRule::class
     * @param float|null $ConstantOfStefanOrNull
     * @param float|null $AreaOrNull
     * @param float|null $TemperatureOrNull
     * @param float|null $PowerOrNull
     * @return StefanRule
     */
    static public function StefanRule(?float $ConstantOfStefanOrNull, ?float $AreaOrNull, ?float $TemperatureOrNull, ?float $PowerOrNull): StefanRule
    {
        return new StefanRule($ConstantOfStefanOrNull, $AreaOrNull, $TemperatureOrNull, $PowerOrNull);
    }

}