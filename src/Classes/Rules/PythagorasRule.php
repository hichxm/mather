<?php


namespace Hichxm\Mather\Classes\Rules;


/**
 * Class PythagorasRule
 * @package Hichxm\Mather\Classes\Rules
 */
class PythagorasRule
{

    /** @var float $hypotenuse */
    private $hypotenuse;
    /** @var float $adjacent */
    private $adjacent;
    /** @var float $opposite */
    private $opposite;

    /**
     * PythagorasRule constructor.
     * @param float|null $AdjacentOrNull
     * @param float|null $HypotenuseOrNull
     * @param float|null $OppositeOrNull
     */
    public function __construct(?float $AdjacentOrNull, ?float $HypotenuseOrNull, ?float $OppositeOrNull)
    {
        $this->adjacent = $AdjacentOrNull;
        $this->hypotenuse = $HypotenuseOrNull;
        $this->opposite = $OppositeOrNull;
    }

    /**
     * Return Hypotenuse from Adjacent and Opposite
     * @return float
     */
    public function getHypotenuseFromAdjacentAndOpposite()
    {
        $opposite = pow($this->opposite, 2);
        $adjacent = pow($this->adjacent, 2);

        $hypotenuse = sqrt($opposite + $adjacent);

        return $hypotenuse;
    }

    /**
     * Return Adjacent from Hypotenuse and Opposite
     * @return float
     */
    public function getAdjacentFromHypotenuseAndOpposite()
    {
        $opposite = pow($this->opposite, 2);
        $hypotenuse = pow($this->hypotenuse, 2);

        $adjacent = sqrt($hypotenuse - $opposite);

        return $adjacent;
    }

    /**
     * Return Opposite from Hypotenuse and Adjacent
     * @return float
     */
    public function getOppositeFromHypotenuseAndAdjacent()
    {
        $adjacent = pow($this->adjacent, 2);
        $hypotenuse = pow($this->hypotenuse, 2);

        $opposite = sqrt($hypotenuse - $adjacent);

        return $opposite;
    }

    /**
     * Return Opposite from Hypotenuse and Adjacent
     * @return float
     */
    public function getOpposite(): float
    {
        return $this->getOppositeFromHypotenuseAndAdjacent();
    }

    /**
     * Return Adjacent from Hypotenuse and Opposite
     * @return float
     */
    public function getAdjacent(): float
    {
        return $this->getAdjacentFromHypotenuseAndOpposite();
    }

    /**
     * Return Hypotenuse from Adjacent and Opposite
     * @return float
     */
    public function getHypotenuse()
    {
        return $this->getHypotenuseFromAdjacentAndOpposite();
    }

}