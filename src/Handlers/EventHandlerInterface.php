<?php

/**
 * Part of the Support package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Support
 * @version    1.1.2
 * @author     Acconplish LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2015, Acconplish LLC
 * @link       http://cartalyst.com
 */

namespace Acconplish\Support\Handlers;

use Illuminate\Events\Dispatcher;

interface EventHandlerInterface
{
    /**
     * Registers the event listeners using the given dispatcher instance.
     *
     * @param  \Illuminate\Events\Dispatcher  $dispatcher
     * @return void
     */
    public function subscribe(Dispatcher $dispatcher);
}
