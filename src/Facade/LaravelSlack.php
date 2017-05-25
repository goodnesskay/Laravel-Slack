<?php

/*
 * This file is part of the Laravel Slack package.
 *
 * (c) Gooodness Toluwanimi Kayode <gtkbrain@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GoodnessKay\LaravelSlack\Facade;
use Illuminate\Support\Facades\Facade;

class LaravelSlack extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelslack';
    }
}