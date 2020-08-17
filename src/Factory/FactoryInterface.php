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

namespace codicastudio\Throttle\Factory;

use codicastudio\Throttle\Data;

/**
 * This is the throttler factory interface.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
interface FactoryInterface
{
    /**
     * Make a new throttler instance.
     *
     * @param \codicastudio\Throttle\Data $data
     *
     * @return \codicastudio\Throttle\Throttler\ThrottlerInterface
     */
    public function make(Data $data);
}
