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

namespace Acconplish\Support\Traits;

trait NamespacedEntityTrait
{
    /**
     * Returns the entity namespace.
     *
     * @return string
     */
    public static function getEntityNamespace()
    {
        return isset(static::$entityNamespace) ? static::$entityNamespace : get_called_class();
    }

    /**
     * Sets the entity namespace.
     *
     * @param  string  $namespace
     * @return void
     */
    public static function setEntityNamespace($namespace)
    {
        static::$entityNamespace = $namespace;
    }
}
