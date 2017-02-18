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

use Acconplish\Support\Validator;

trait ValidatorTrait
{
    /**
     * The Validator instance.
     *
     * @var \Acconplish\Support\Validator
     */
    protected $validator;

    /**
     * Returns the Validator instance.
     *
     * @return \Acconplish\Support\Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Sets the Validator instance.
     *
     * @param  \Acconplish\Support\Validator  $validator
     * @return $this
     */
    public function setValidator(Validator $validator)
    {
        $this->validator = $validator;

        return $this;
    }
}
