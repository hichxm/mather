<?php


use Hichxm\Mather\Mather;

class MatherRuleTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function check_if_pythagoras_rule_work()
    {

        $rule = Mather::PythagorasRule(null, null, null);
        $this->assertInstanceOf(\Hichxm\Mather\Classes\Rules\PythagorasRule::class, $rule);

    }
    
}
