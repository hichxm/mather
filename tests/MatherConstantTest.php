<?php


use Hichxm\Mather\Mather;

class MatherConstantTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function check_if_pi_as_returned()
    {
        $this->assertSame(pi(), Mather::PI());
    }

    /** @test */
    public function check_if_planck_as_returned()
    {
        $this->assertSame(6.62607004 * pow(10, -34), Mather::PLANCK());
    }

    /** @test */
    public function check_if_lightspeed_as_returned()
    {
        $this->assertSame(299792458,  Mather::LIGHT_SPEED());
    }

    /** @test */
    public function check_if_meisseilmertens_as_returned()
    {
        $this->assertSame(0.261497212847642783755426838608695859, Mather::MEISSEL_MERTENS());
    }

    /** @test */
    public function check_if_stefanboltzmann_returned()
    {
        $this->assertSame(5.670367 * pow(10, -8), Mather::STEFAN_BOLTZMANN());
    }

}
