<?php


use Hichxm\Mather\Mather;

class MatherTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function check_psr4_work()
    {
        $mather = new Mather;

        $this->assertInstanceOf(Mather::class, $mather);
    }

}
