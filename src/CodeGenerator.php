<?php

namespace Furqat\CodeGenerator;

use Illuminate\Support\Facades\Facade;

class CodeGenerator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'code-generator';
    }
}
