<?php


namespace Hichxm\Mather;


use Hichxm\Mather\Traits\Constant;
use Hichxm\Mather\Traits\Operation;
use Hichxm\Mather\Traits\Rule;
use Hichxm\Mather\Traits\Shortcut;


/**
 * Class Mather
 * @package Hichxm\Mather
 */
class Mather
{

    /**
     * Basic operation, very well documented.
     */
    use Operation;

    /**
     * Shortcut of every
     */
    use Shortcut;

    /**
     * Lot of mathematics constant
     */
    use Constant;

    /**
     * Shortcut for rules
     */
    use Rule;

}