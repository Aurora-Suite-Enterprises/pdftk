<?php

namespace AuroraSuite\Pdftk;

use LogicException;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AuroraSuite\Pdftk\Commands\PdftkCommand;

class PdftkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pdftk')
            ->hasConfigFile()
        ;
    }
}
