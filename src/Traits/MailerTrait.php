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

use Acconplish\Support\Mailer;

trait MailerTrait
{
    /**
     * The Mailer instance.
     *
     * @var \Acconplish\Support\Mailer
     */
    protected $mailer;

    /**
     * Returns the Mailer instance.
     *
     * @return \Acconplish\Support\Mailer
     */
    public function getMailer()
    {
        return $this->mailer;
    }

    /**
     * Sets the Mailer instance.
     *
     * @param  \Acconplish\Support\Mailer  $mailer
     * @return $this
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;

        return $this;
    }
}
