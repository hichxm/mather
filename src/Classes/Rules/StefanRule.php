<?php


namespace Hichxm\Mather\Classes\Rules;


use Hichxm\Mather\Mather;

/**
 * Class StefanRule
 * @package Hichxm\Mather\Classes\Rules
 */
class StefanRule
{

    /** @var float $stefan */
    private $stefan;
    /** @var float $area */
    private $area;
    /** @var float $temperature */
    private $temperature;
    /** @var float $power */
    private $power;

    /**
     * StefanRule constructor.
     * @param float|null $ConstantOfStefanOrNull
     * @param float|null $AreaOrNull
     * @param float|null $TemperatureOrNull
     * @param float|null $PowerOrNull
     */
    public function __construct(?float $ConstantOfStefanOrNull, ?float $AreaOrNull, ?float $TemperatureOrNull, ?float $PowerOrNull)
    {
        $this->stefan = $ConstantOfStefanOrNull ?? Mather::STEFAN_BOLTZMANN();
        $this->area = $AreaOrNull;
        $this->temperature = $TemperatureOrNull;
        $this->power = $PowerOrNull;
    }

    /**
     * Return Power (Watts) from Area, Temperature and Stefan constant
     * @return float
     */
    public function getPowerFromAreaTemperatureAndStefanConstant(): float
    {
        $stefan = $this->stefan;
        $area = $this->area;
        $temperature = pow($this->temperature, 4);

        $power = $stefan * $area * $temperature;

        return $power;
    }

    /**
     * Return Stefan constant (W/m²/K⁴) from Area, Temperature and Power
     * @return float
     */
    public function getStefanConstantFromAreaTemperatureAndPower(): float
    {
        $area = $this->area;
        $power = $this->power;
        $temperature = pow($this->temperature, 4);

        $stefan = $power / ($area * $temperature);

        return $stefan;
    }

    /**
     * Return Area (m²) from Power, Temperature and Stefan constant
     * @return float
     */
    public function getAreaFromStefanConstantTemperatureAndPower(): float
    {
        $power = $this->power;
        $temperature = pow($this->temperature, 4);
        $stefan = $this->stefan;

        $area = $power / ($temperature * $stefan);

        return $area;
    }

    /**
     * Get Temperature (K⁴) from Power, Area and Stefan constant
     * @return float
     */
    public function getTemperatureFromPowerAreaAndStefanConstant(): float
    {
        $power = $this->power;
        $area = $this->area;
        $stefan = $this->stefan;

        $temperature = $power / ($stefan * $area);

        return $temperature;
    }

    /**
     * Get Temperature (K) from Power, Area and Stefan constant
     * @return float
     */
    public function getTemperatureSquaredTwoTimesFromPowerAreaAndStefanConstant(): float
    {
        $temperature = sqrt(sqrt($this->getTemperatureFromPowerAreaAndStefanConstant()));

        return $temperature;
    }

    /**
     * Return Power (W) from Area, Temperature and Stefan constant
     * @return float
     */
    public function getPower(): float
    {
        return $this->getPowerFromAreaTemperatureAndStefanConstant();
    }

    /**
     * Return Area (m²) from Power, Temperature and Stefan constant
     * @return float
     */
    public function getArea(): float
    {
        return $this->getAreaFromStefanConstantTemperatureAndPower();
    }

    /**
     * Get Temperature (K⁴) from Power, Area and Stefan constant
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->getTemperatureFromPowerAreaAndStefanConstant();
    }

    /**
     * Return Stefan constant (W/m²/K⁴) from Area, Temperature and Power
     * @return float
     */
    public function getStefanConstant(): float
    {
        return $this->getStefanConstantFromAreaTemperatureAndPower();
    }

    /**
     * Get Temperature (K) from Power, Area and Stefan constant
     * @return float
     */
    public function getTemperatureSquared(): float
    {
        return $this->getTemperatureSquaredTwoTimesFromPowerAreaAndStefanConstant();
    }

    /**
     * @param float $stefan
     */
    public function setStefan(float $stefan): void
    {
        $this->stefan = $stefan;
    }

    /**
     * @param float $power
     */
    public function setPower(float $power): void
    {
        $this->power = $power;
    }

    /**
     * @param float $temperature
     */
    public function setTemperature(float $temperature): void
    {
        $this->temperature = $temperature;
    }

    /**
     * @param float $area
     */
    public function setArea(float $area): void
    {
        $this->area = $area;
    }

}