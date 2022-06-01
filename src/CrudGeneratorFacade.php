<?php

namespace Chillout\CrudGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chillout\CrudGenerator\Skeleton\SkeletonClass
 */
class CrudGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'crud-generator';
    }
}
