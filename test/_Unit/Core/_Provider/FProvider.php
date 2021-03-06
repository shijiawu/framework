<?php

namespace Kraken\_Unit\Core\_Provider;

use Kraken\Container\ServiceProvider;

class FProvider extends ServiceProvider
{
    /**
     * @var string[]
     */
    protected $requires = [ 'G' ];

    /**
     * @var string[]
     */
    protected $provides = [ 'F' ];
}
