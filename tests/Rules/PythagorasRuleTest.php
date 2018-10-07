<?php


use Hichxm\Mather\Classes\Rules\PythagorasRule;
use PHPUnit\Framework\TestCase;

class PythagorasRuleTest extends TestCase
{

    /** @test */
    public function get_hypotenuse_from_adjacent_and_opposite()
    {

        $arrayOfNumbers = [
            [10, null, 25, 26.93],
            [5.5, null, 8.8, 10.38]
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $rule = new PythagorasRule($arrayOfNumber[0], $arrayOfNumber[1], $arrayOfNumber[2]);
            $this->assertSame(round($rule->getHypotenuse(), 2), $arrayOfNumber[3]);
        }

    }

    /** @test */
    public function get_adjacent_from_hypotenuse_and_opposite()
    {

        $arrayOfNumbers = [
            [null, 45, 25, 37.42],
            [null, 15, 8.8, 12.15]
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $rule = new PythagorasRule($arrayOfNumber[0], $arrayOfNumber[1], $arrayOfNumber[2]);
            $this->assertSame(round($rule->getAdjacent(), 2), $arrayOfNumber[3]);
        }

    }

    /** @test */
    public function get_opposite_from_hypotenuse_and_adjacent()
    {

        $arrayOfNumbers = [
            [12.2, 45, null, 43.31],
            [98.5, 200, null, 174.06]
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $rule = new PythagorasRule($arrayOfNumber[0], $arrayOfNumber[1], $arrayOfNumber[2]);
            $this->assertSame(round($rule->getOpposite(), 2), $arrayOfNumber[3]);
        }

    }
}
