<?php


use Hichxm\Mather\Classes\Rules\StefanRule;
use Hichxm\Mather\Mather;
use PHPUnit\Framework\TestCase;

class StefanRuleTest extends TestCase
{

    /** @test */
    public function get_power_from_area_temperature_and_stefan_constant()
    {
        $arrayOfNumbers = [
            [null, Mather::STEFAN_BOLTZMANN(), 25, 15, 0.072],
            [null, Mather::STEFAN_BOLTZMANN(), 500, 48, 150.503]
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $rule = new StefanRule($arrayOfNumber[1], $arrayOfNumber[2], $arrayOfNumber[3], $arrayOfNumber[0]);
            $this->assertSame(round($rule->getPowerFromAreaTemperatureAndStefanConstant(), 3), $arrayOfNumber[4]);
        }
    }

    /** @test */
    public function get_stefan_constant_from_area_power_and_temperature()
    {
        $arrayOfNumbers = [
            [0.072, null, 25, 15, round(Mather::STEFAN_BOLTZMANN(), 3)],
            [150.503, null, 500, 48, round(Mather::STEFAN_BOLTZMANN(), 3)]
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $rule = new StefanRule($arrayOfNumber[1], $arrayOfNumber[2], $arrayOfNumber[3], $arrayOfNumber[0]);
            $this->assertSame(round($rule->getStefanConstantFromAreaTemperatureAndPower(), 3), $arrayOfNumber[4]);
        }
    }

    /** @test */
    public function get_temperature_squared_two_times_from_power_area_and_stefan_constant()
    {
        $arrayOfNumbers = [
            [450, Mather::STEFAN_BOLTZMANN(), 25, null, 133.48],
            [150.503, Mather::STEFAN_BOLTZMANN(), 500, null, 48.0],

            [450, null, 25, null, 133.48],
            [150.503, null, 500, null, 48.0]
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $rule = new StefanRule($arrayOfNumber[1], $arrayOfNumber[2], $arrayOfNumber[3], $arrayOfNumber[0]);
            $this->assertSame(round($rule->getTemperatureSquaredTwoTimesFromPowerAreaAndStefanConstant(), 3), $arrayOfNumber[4]);
        }
    }

    /** @test */
    public function get_area_from_stefan_constant_temperature_and_power()
    {
        $arrayOfNumbers = [
            [450, Mather::STEFAN_BOLTZMANN(), null, 85, 152.029],
            [150.503, Mather::STEFAN_BOLTZMANN(), null, 95, 32.587],

            [450, null, null, 85, 152.029],
            [150.503, null, null, 95, 32.587]
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $rule = new StefanRule($arrayOfNumber[1], $arrayOfNumber[2], $arrayOfNumber[3], $arrayOfNumber[0]);
            $this->assertSame(round($rule->getAreaFromStefanConstantTemperatureAndPower(), 3), $arrayOfNumber[4]);
        }
    }

    /** @test */
    public function get_temperature_from_power_area_and_stefan_constant()
    {
        $arrayOfNumbers = [
            [450, Mather::STEFAN_BOLTZMANN(), 25, null, 317439770.653],
            [150.503, Mather::STEFAN_BOLTZMANN(), 500, null, 5308404.2],

            [450, null, 25, null, 317439770.653],
            [150.503, null, 500, null, 5308404.2]
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $rule = new StefanRule($arrayOfNumber[1], $arrayOfNumber[2], $arrayOfNumber[3], $arrayOfNumber[0]);
            $this->assertSame(round($rule->getTemperatureFromPowerAreaAndStefanConstant(), 3), $arrayOfNumber[4]);
        }
    }

}
