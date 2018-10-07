<?php


use Hichxm\Mather\Exceptions\DivisionByZeroException;
use Hichxm\Mather\Mather;

class MatherOperationTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function check_if_sum_function_work()
    {

        $arrayOfNumbers =  [
            /* Integer */
            [15, 5, 10],
            [50, 45, 5],

            /* Float */
            [1.1, 1, 0.1],
            [80.5, 40, 40.5]
        ];

        foreach ($arrayOfNumbers as $numbers) {
            $sum = Mather::sum($numbers[1], $numbers[2]);

            $this->assertSame($numbers[0], $sum);
        }

    }

    /** @test */
    public function check_if_sub_function_work()
    {

        $arrayOfNumbers =  [
            /* Integer */
            [45, 45, 0],
            [45, +100, 55],

            /* Float */
            [0.9, 1, 0.1],
            [-0.5, 40, 40.5]
        ];

        foreach ($arrayOfNumbers as $numbers) {
            $sum = Mather::sub($numbers[1], $numbers[2]);

            $this->assertSame($numbers[0], $sum);
        }

    }

    /** @test */
    public function check_if_multiply_function_work()
    {

        $arrayOfNumbers =  [
            /* Integer */
            [25, 5, 5],
            [0, 800, 0],

            /* Float */
            [409.5, 45.5, 9],
            [-366.4, 45.8, -8]
        ];

        foreach ($arrayOfNumbers as $numbers) {
            $sum = Mather::mul($numbers[1], $numbers[2]);

            $this->assertSame($numbers[0], $sum);
        }

    }

    /** @test */
    public function check_if_divide_function_work()
    {

        $arrayOfNumbers =  [
            /* Integer */
            [50, 100, 2],
            [-20, 40, -2],

            /* Float */
            [-22.5, 45, -2],
            [81.4, 814, 10],

            /* DivisionBy0 */
            [45, 485, 0]
        ];

        foreach ($arrayOfNumbers as $numbers) {

            try {
                $sum = Mather::div($numbers[1], $numbers[2]);
                $this->assertSame($numbers[0], $sum);
            } catch (DivisionByZeroException $e) {
                $this->assertInstanceOf(DivisionByZeroException::class, $e);
            }
        }

    }

    /** @test */
    public function check_if_power_function_work()
    {

        $arrayOfNumbers =  [
            /* Integer */
            [50, 100, 7.88860905221012E+169],
            [-20, 40, 1.099511627776E+52],

            /* Float */
            [-22.5, 45, -7.05039282284307E+60],
            [81.4, 814, INF],
        ];

        foreach ($arrayOfNumbers as $arrayOfNumber) {
            $pow = Mather::pow($arrayOfNumber[0], $arrayOfNumber[1]);

            $this->assertSame($pow, $arrayOfNumber[2]);
        }

    }

}
