<?php

namespace Emmieio\PhpViteStarter\Facades;

use Emmieio\PhpViteStarter\Helpers\Illusion;



class Route extends Illusion
{
    public static function getIllusionAccessor(): string
    {
        return 'router';
    }
}
