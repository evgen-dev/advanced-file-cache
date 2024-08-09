<?php

namespace EvgenDev\FileCache;

use Closure;
use EvgenDev\LaravelPlupload\Receiver;
use Illuminate\Http\Request;

class Manager
{

    public function put(string|array $keys, mixed $value){
       dump($keys, $value);
    }
}
