<?php

namespace Codio\PackageTraining\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codio\PackageTraining\PackageTraining
 */
class PackageTraining extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'package-training';
    }
}
