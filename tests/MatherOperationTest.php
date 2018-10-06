<?php


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

}
