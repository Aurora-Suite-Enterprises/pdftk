<?php

namespace AuroraSuite\Pdftk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AuroraSuite\Pdftk\Pdftk
 */
class Pdftk extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AuroraSuite\Pdftk\Pdftk::class;
    }
}
