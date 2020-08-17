<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Throttle.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace codicastudio\Tests\Throttle\Facades;

use codicastudio\TestBenchCore\FacadeTrait;
use codicastudio\Tests\Throttle\AbstractTestCase;
use codicastudio\Throttle\Facades\Throttle as Facade;
use codicastudio\Throttle\Throttle;

/**
 * This is the throttle facade test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ThrottleTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'throttle';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Facade::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Throttle::class;
    }
}
