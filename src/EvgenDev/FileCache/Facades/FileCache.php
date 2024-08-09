<?php

namespace EvgenDev\FileCache\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EvgenDev\LaravelPlupload\Manager
 */
class FileCache extends Facade
{
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
            return 'filecache';
        }
}
